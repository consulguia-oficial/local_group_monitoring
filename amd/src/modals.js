// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

define(['jquery', 'core/modal_factory', 'core/modal_events'], function($, ModalFactory, ModalEvents) {
return {
init: function() {
$('[id^=btn-new-]').on('click', function(e) {
e.preventDefault();
var btnId = $(this).attr('id');
var container = $('#groupmon-container');
var courseid = container.data('courseid');
var sesskey = container.data('sesskey');
var rolesOptions = $('#hidden-roles').html();
var polosOptions = $('#hidden-polos').html();
var tutorsOptions = $('#hidden-tutors').html();
var title = '';
var body = '';
var btnText = '';
if (btnId === 'btn-new-polo') {
title = 'Garantir Campo Polo';
btnText = 'Criar Campo';
body = '<form id="groupmon-form" action="index.php?courseid='+courseid+'" method="POST"><input type="hidden" name="sesskey" value="'+sesskey+'"><input type="hidden" name="action" value="createpolo"><p>Isto criará o campo profile_field_polo nativamente no Moodle.</p></form>';
} else if (btnId === 'btn-new-tutor') {
title = 'Novo Tutor';
btnText = 'Criar Tutor';
body = '<form id="groupmon-form" action="index.php?courseid='+courseid+'" method="POST"><input type="hidden" name="sesskey" value="'+sesskey+'"><input type="hidden" name="action" value="createtutor"><div class="row"><div class="col-md-6"><div class="form-group"><label class="font-weight-bold">Primeiro nome *</label><input type="text" name="firstname" class="form-control" required></div></div><div class="col-md-6"><div class="form-group"><label class="font-weight-bold">Sobrenome *</label><input type="text" name="lastname" class="form-control" required></div></div></div><div class="form-group"><label class="font-weight-bold">Email *</label><input type="email" name="email" class="form-control" required></div><div class="row"><div class="col-md-6"><div class="form-group"><label class="font-weight-bold">Username *</label><input type="text" name="username" class="form-control" required></div></div><div class="col-md-6"><div class="form-group"><label class="font-weight-bold">Senha Inicial *</label><input type="password" name="password" class="form-control" required></div></div></div><div class="form-group"><label class="font-weight-bold">Papel (Role) no Curso *</label><select name="roleid" class="form-control" required><option value="">Selecione...</option>'+rolesOptions+'</select></div><div class="form-group"><label class="font-weight-bold">Vincular a um Polo</label><input type="text" name="polo" class="form-control" placeholder="Ex: Polo SP"></div></form>';
} else if (btnId === 'btn-new-group') {
title = 'Novo Grupo';
btnText = 'Criar Grupo';
body = '<form id="groupmon-form" action="index.php?courseid='+courseid+'" method="POST"><input type="hidden" name="sesskey" value="'+sesskey+'"><input type="hidden" name="action" value="creategroup"><div class="form-group"><label class="font-weight-bold">Polo Existente *</label><select name="polo" class="form-control" required><option value="">Selecione...</option>'+polosOptions+'</select></div><div class="form-group"><label class="font-weight-bold">Tutor (Usuário) *</label><select name="tutorid" class="form-control" required><option value="">Selecione...</option>'+tutorsOptions+'</select></div><p class="text-muted small mt-2">Formato final gerado: Polo_Nome_InicialSobrenome</p></form>';
}
ModalFactory.create({
type: ModalFactory.types.SAVE_CANCEL,
title: title,
body: body,
large: true
}).done(function(modal) {
modal.setSaveButtonText(btnText);
modal.getRoot().on(ModalEvents.save, function(e) {
e.preventDefault();
var form = modal.getRoot().find('#groupmon-form')[0];
if (form && form.checkValidity()) {
form.submit();
} else if (form) {
form.reportValidity();
}
});
modal.show();
});
});
}
};
});
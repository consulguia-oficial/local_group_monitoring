<?php
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

/**
 * English strings for the Group Monitoring plugin.
 *
 * @package    local_group_monitoring
 * @copyright  2026 Consulguia
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Monitoramento de grupos';
$string['pluginnamesettings'] = 'Configurações do monitoramento de grupos';
$string['local_group_monitoring:view'] = 'Ver painel de monitoramento de grupos';
$string['local_group_monitoring:creategroup'] = 'Criar grupos monitorados';
$string['local_group_monitoring:addmember'] = 'Adicionar membros a grupos monitorados';
$string['local_group_monitoring:createtutor'] = 'Criar usuários tutores';
$string['local_group_monitoring:managepolo'] = 'Gerenciar campo de perfil de polo';
$string['local_group_monitoring:deletegroup'] = 'Excluir grupos monitorados';
$string['local_group_monitoring:config'] = 'Configurar plugin de monitoramento de grupos';
$string['dashboard'] = 'Painel de monitoramento de grupos';
$string['groups'] = 'Grupos';
$string['creategroup'] = 'Criar grupo';
$string['groupdetail'] = 'Detalhes do grupo';
$string['members'] = 'Membros';
$string['addmember'] = 'Adicionar membro';
$string['importcsv'] = 'Importar via CSV';
$string['courseid'] = 'Curso';
$string['polo'] = 'Polo';
$string['tutor'] = 'Tutor';
$string['groupname'] = 'Nome do grupo';
$string['username'] = 'Nome de usuário';
$string['fullname'] = 'Nome completo';
$string['added_via'] = 'Adicionado via';
$string['added_via_manual'] = 'Manual';
$string['added_via_csv'] = 'CSV';
$string['error_no_polo'] = 'Nenhum polo encontrado para o curso selecionado.';
$string['error_no_tutor'] = 'Nenhum tutor associado a este polo.';
$string['error_duplicate'] = 'Já existe um grupo com este nome neste curso.';
$string['error_csv_empty'] = 'Nenhum nome de usuário foi encontrado no CSV enviado.';
$string['error_csv_invalid'] = 'Arquivo CSV inválido. Esperado um nome de usuário por linha.';
$string['error_invalidemail'] = 'Endereço de e-mail inválido.';
$string['error_invalidrole'] = 'O papel selecionado não é permitido para criação de tutor.';
$string['error_unexpected'] = 'Ocorreu um erro inesperado. Entre em contato com o administrador do site.';
$string['error_usernotfound'] = 'O usuário {$a} não foi encontrado no Moodle.';
$string['error_usernameexists'] = 'Este nome de usuário já existe no Moodle.';
$string['group_created'] = 'Grupo "{$a}" criado com sucesso.';
$string['group_created_plain'] = 'Grupo criado com sucesso.';
$string['group_deleted'] = 'Grupo excluído com sucesso.';
$string['member_added'] = 'Membro adicionado com sucesso.';
$string['members_imported'] = '{$a} membros importados com sucesso.';
$string['polo_field_created'] = 'O campo de perfil configurado para polo está disponível.';
$string['tutor_created'] = 'Tutor criado e matriculado com sucesso.';
$string['courses'] = 'Cursos';
$string['polos'] = 'Polos';
$string['tutors'] = 'Tutores';
$string['polofield'] = 'Campo de perfil para polo';
$string['polofield_desc'] = 'Selecione o campo de perfil de usuário personalizado que será usado para agrupar os polos. Caso nenhum campo exista, o campo padrão "polo" será usado e criado.';
$string['privacy:metadata:local_groupmon_groups'] = 'Stores monitored groups created and managed by the Group Monitoring plugin.';
$string['privacy:metadata:local_groupmon_groups:name'] = 'The monitored group name.';
$string['privacy:metadata:local_groupmon_groups:courseid'] = 'The course where the monitored group was created.';
$string['privacy:metadata:local_groupmon_groups:polo'] = 'The polo associated with the monitored group.';
$string['privacy:metadata:local_groupmon_groups:tutorid'] = 'The user ID of the tutor associated with the monitored group.';
$string['privacy:metadata:local_groupmon_groups:moodle_groupid'] = 'The corresponding Moodle group ID.';
$string['privacy:metadata:local_groupmon_groups:timecreated'] = 'The time when the monitored group was created.';
$string['privacy:metadata:local_groupmon_groups:timemodified'] = 'The time when the monitored group was last modified.';
$string['privacy:metadata:local_groupmon_groups:usermodified'] = 'The user ID of the user who last modified the monitored group.';
$string['privacy:metadata:local_groupmon_members'] = 'Stores members added to monitored groups.';
$string['privacy:metadata:local_groupmon_members:groupid'] = 'The monitored group ID.';
$string['privacy:metadata:local_groupmon_members:userid'] = 'The user ID of the group member.';
$string['privacy:metadata:local_groupmon_members:username'] = 'The username of the group member.';
$string['privacy:metadata:local_groupmon_members:added_via'] = 'The method used to add the member to the group.';
$string['privacy:metadata:local_groupmon_members:timecreated'] = 'The time when the member was added.';
$string['privacy:metadata:local_groupmon_members:usermodified'] = 'The user ID of the user who added or last modified the member record.';
$string['privacy:metadata:local_groupmon_polos'] = 'Stores polos managed by the Group Monitoring plugin.';
$string['privacy:metadata:local_groupmon_polos:name'] = 'The polo name.';
$string['privacy:metadata:local_groupmon_polos:timecreated'] = 'The time when the polo was created.';
$string['privacy:metadata:local_groupmon_polos:timemodified'] = 'The time when the polo was last modified.';
$string['privacy:metadata:local_groupmon_polos:usermodified'] = 'The user ID of the user who last modified the polo.';

<?php class L {
const titles_page_title = 'Library v2.0';
const titles_authors = 'Autores';
const titles_books = 'Livros';
const titles_categories = 'Categorias';
const titles_clients = 'Clientes';
const titles_publishers = 'Editoras';
const titles_change_psw = 'Trocar Senha';
const titles_edit_book = 'Editar Livro';
const titles_edit_category = 'Editar Categoria';
const titles_edit_author = 'Editar Autor';
const titles_edit_client = 'Editar Cliente';
const titles_edit_publisher = 'Editar Editora';
const titles_edit_copie = 'Editar Exemplar';
const titles_edit_user = 'Editar Usuário';
const titles_calendar = 'Calendário';
const titles_copies = 'Exemplares';
const titles_login = 'Iniciar Sessão';
const titles_new_athor = 'Novo Autor';
const titles_new_book = 'Novo Livro';
const titles_new_client = 'Novo Cliente';
const titles_new_category = 'Nova Categoria';
const titles_new_publisher = 'Nova Editora';
const titles_new_item = 'Novo Exemplar';
const titles_new_user = 'Adicionar Usuário';
const titles_loan = 'Empréstimo';
const titles_loans = 'Empréstimos';
const titles_sell_list = 'Lista de venda';
const titles_reports = 'Relatórios';
const titles_users_list = 'Lista de Usuários';
const buttons_new_author = 'Novo Autor';
const buttons_new_category = 'Nova Categoria';
const buttons_new_client = 'Novo Cliente';
const buttons_new_publisher = 'Nova Editora';
const buttons_new_copie = 'Novo Exemplar';
const buttons_new_user = 'Novo Usuário';
const buttons_edit = 'Editar';
const buttons_delete = 'Deletar';
const buttons_copies = 'Exemplares';
const buttons_execute = 'Executar';
const buttons_historic = 'Histórico';
const buttons_cancel = 'Cancelar';
const buttons_search = 'Buscar';
const buttons_finish = 'Finalizar';
const buttons_clean_fields = 'Limpar Campos';
const buttons_code = 'Código';
const buttons_status = 'Status';
const buttons_change_psw = 'Trocar Senha';
const buttons_update_author = 'Atualizar Autor';
const buttons_update_book = 'Atualizar Livro';
const buttons_update_category = 'Atualizar Categoria';
const buttons_update_client = 'Atualizar Cliente';
const buttons_update_publisher = 'Atualizar Editora';
const buttons_update_user = 'Atualizar Usuário';
const buttons_update_copie = 'Atualizar Exemplar';
const buttons_add_author = 'Adicionar Autor';
const buttons_add_book = 'Adicionar Livro';
const buttons_add_category = 'Adicionar Categoria';
const buttons_add_client = 'Adicionar Cliente';
const buttons_add_publisher = 'Adicionar Editora';
const buttons_add_item = 'Adicionar Exemplar';
const buttons_add_user = 'Adicionar Usuário';
const navbar_toggle_nav = 'Alternar Navegação';
const navbar_home = 'Início';
const navbar_loan = 'Empréstimo';
const navbar_loans = 'Empréstimos';
const navbar_books = 'Livros';
const navbar_clients = 'Clientes';
const navbar_categories = 'Categorias';
const navbar_publishers = 'Editoras';
const navbar_authors = 'Autores';
const navbar_relatories = 'Relatórios';
const navbar_users = 'Usuários';
const navbar_config = 'Configuração';
const navbar_exit = 'Sair';
const evilnapsis_website = 'Website';
const evilnapsis_about_library = 'Sobre Library';
const evilnapsis_appstore = 'Loja de Aplicativos';
const fields_name = 'Nome';
const fields_lastname = 'Sobrenome';
const fields_full_name = 'Nome completo';
const fields_username = 'Nome de Usuário';
const fields_start = 'Início';
const fields_end = 'Fim';
const fields_password = 'Senha';
const fields_actual_psw = 'Senha Atual';
const fields_new_psw = 'Nova Senha';
const fields_confirm_new_psw = 'Confirmar Nova Senha';
const fields_isbn = 'ISBN';
const fields_title = 'Título';
const fields_subtitle = 'Subtítulo';
const fields_copies = 'Exemplares';
const fields_copie = 'Exemplar';
const fields_available = 'Disponíveis';
const fields_category = 'Categoria';
const fields_book = 'Livro';
const fields_client = 'Cliente';
const fields_devolution = 'Devolução';
const fields_address = 'Endereço';
const fields_email = 'Email';
const fields_phone = 'Telefone';
const fields_description = 'Descrição';
const fields_page_number = 'Num. Páginas';
const fields_year = 'Ano';
const fields_select = 'Selecione';
const fields_publisher = 'Editora';
const fields_author = 'Autor';
const fields_is_active = 'Esta ativo';
const fields_is_admin = 'É administrador';
const fields_keyword = 'Palavra chave';
const fields_code = 'Código';
const fields_state = 'Estado';
const fields_status = 'Status';
const fields_reports = 'Relatórios';
const fields_date = 'Data';
const fields_login = 'Iniciar Sessão';
const messages_no_authors = 'Não há Autores.';
const messages_no_books = 'Não há Livros.';
const messages_no_categories = 'Não há Categorias.';
const messages_no_loan = 'Não há Empréstimos.';
const messages_no_clients = 'Não há Clientes.';
const messages_no_publishers = 'Não há Editoras.';
const messages_no_copies = 'Não há Exemplares.';
const messages_no_data = 'Não há Dados.';
const messages_must_select_date_range = 'Deve selecionar um intervalo de datas.';
const messages_must_not_have_whitespaces = 'Não deve deixar espaços vazios.';
const messages_psw_dont_match = 'A nova senha não coincide com o campo de confirmação.';
const messages_mandatory_fields = 'Campos Obrigatórios';
const messages_loading = 'Carregando';
const messages_has_updated_password = 'Se atualizou a senha';
const messages_password_only_updated_if_field = 'A senha apenas se modificara se escrever algo no campo, caso contrário não se modifica.';
const messages_if_changed_password_with_success = 'Senha atualizada com sucesso!';
const messages_can_login_with_new_password = 'Pode iniciar a sessão com sua nova senha.';
const messages_search_book_by_code_isbn = 'Buscar livro por título ou por código/isbn:';
public static function __callStatic($string, $args) {
    return vsprintf(constant("self::" . $string), $args);
}
}
function L($string, $args=NULL) {
    $return = constant("L::".$string);
    return $args ? vsprintf($return,$args) : $return;
}
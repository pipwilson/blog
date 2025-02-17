{% set pipbook = load_data(
    url=config.extra.base_services_url ~ "pip_save_book.php",
    method="POST",
    body='{"text":"'~body~'"}',
    required=true)
%}

{{ pipbook }}
{{ body }}
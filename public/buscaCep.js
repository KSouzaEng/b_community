
    function buscaCep() {
        let inputCep = document.querySelector('input[name=postalCode]');
        let cep = inputCep.value.replace('-', '');
        let url = 'http://viacep.com.br/ws/' + cep + '/json';
        let xhr = new XMLHttpRequest();
        xhr.open('GET', url, true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4) {
                if (xhr.status = 200 )
                    preencheCampos(JSON.parse(xhr.responseText));
            }
        }
        xhr.send();
    }

    function preencheCampos(json) {
        
        if(!json.erro){
                document.querySelector('input[name=street]').value = json.logradouro;
                document.querySelector('input[name=district]').value = json.bairro;
                document.querySelector('input[name=city]').value = json.localidade;
                document.querySelector('input[name=state]').value = json.uf;
        }else{
            alert('CEP inválido')
            document.querySelector('input[name=street]').value = "";
            document.querySelector('input[name=district]').value = "";
            document.querySelector('input[name=city]').value = "";
            document.querySelector('input[name=state]').value = "";
        }
    }
    



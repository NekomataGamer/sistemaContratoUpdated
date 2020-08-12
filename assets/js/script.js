$( document ).ready(function() {
    let id_empresa = $('#empresa');
    let tipo_contrato = $('#tipo_contrato');
    let meupau = $('#meu_pau');

    meupau.hide();
    
    
    id_empresa.on('change', function(){

        $.getJSON({
            type:'POST',
            url: BASE_URL+'adm/buscaTiposContratos',
            datatype: 'JSON',
            data:{id_empresa:id_empresa.val()},
            success:function(resp){
                let html = '<option value="">Selecione Um Tipo de contrato</option>';

                for(let q = 0;q<resp.length;q++){
                    html += '<option value="'+resp[q].id+'">'+resp[q].titulo+'</option>';
                }
                meupau.fadeIn();
                tipo_contrato.html(html);
            },
            error:function(r){

            }
        }); 

        
    });
});
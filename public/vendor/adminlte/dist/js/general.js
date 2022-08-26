$(function() {


     // Ativa o Select2 nos campos dos formulários
     $('.select2').select2();

     // Carrega o CKEditor
     ClassicEditor
     .create( 
         document.querySelector( '#editor' ),{
             toolbar: ['bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ],
         }
     )
     .catch( error => {
         console.error( error );
     } );



    // Recupera o valor do tipo de pessoa e modifica o conteúdo do formulário
    $('.typeperson').on('click',function(){
        const typePerson = $(this).val();
        switch (typePerson) {
            case 'pj':
                    $('.box-pf').fadeOut();
                    $('.box-pj').fadeIn();
                    $('.box-pf,.box-pj').removeAttr('style');
                    $('.box-pj').removeClass('box-disabled');
                    $('.box-pf').addClass('box-disabled');
                    $('.box-pj input,.box-pj select').prop('disabled', false);
                    $('.box-pf input,.box-pf select').prop('disabled', true);
                break;
            case 'pf':
                    $('.box-pj').fadeOut();
                    $('.box-pf').fadeIn();
                    $('.box-pf,.box-pj').removeAttr('style');
                    $('.box-pj').addClass('box-disabled');
                    $('.box-pf').removeClass('box-disabled');
                    $('.box-pf input,.box-pf select').prop('disabled', false);
                    $('.box-pj input,.box-pj select').prop('disabled', true);
                break;
        
            default:
                break;
        }
    });


    // Coleta de dados do Cnpj
    $('#cnpj').on('blur',function(e){
        console.log("Teste");
        const cnpj = $(this).val();
        const settings = {
            'async': true,
            'crossDomain': true,
            'url': 'http://receitaws.com.br/v1/cnpj/45997418000153',
            'method': 'GET',
            'headers': {
              'Content-Type': 'application/json',
              'Access-Control-Allow-Origin':'*'
            }
          };
          
          $.ajax(settings).done(function (response) {
            console.log(response);
          });

    });
});


// Adiciona o elemento de contato
function addExtraContact(){
    
                let posContainer = document.querySelectorAll('.box_adicional').length;
                console.log(posContainer);
                let container = `
                <div class='row box_adicional contact_extra_${posContainer} mt-2 p-2 border rounded bg-light'>
                    <div class='col-md-6' id="box-tel-adicional-${posContainer}">
                        <div class='row'>
                            <div class='col-md-12'>
                                <label><small class='font-weight-bold'>Nome</small></label>
                                <input type='text' class='form-control form-control-sm' name='contact_extra[${posContainer}][name]'>
                            </div>
                        </div>
                        <div class='row item-tel-adicional-${posContainer}'>
                            <div class='col-md-6'>
                                <label><small class='font-weight-bold'>Telefone</small><span class='text-danger'>*</span></label>
                                <input type='text' class='form-control form-control-sm' name='contact_extra[${posContainer}][tel][0][number]'>
                            </div>
                            <div class='col-md-6'>
                                <label><small class='font-weight-b
                                old'>Tipo</small><span class='text-danger'>*</span></label>
                                <select class='form-control form-control-sm' name='contact_extra[${posContainer}][tel][0][type]'>
                                    <option value=''>Selecione</option>
                                    <option value='residencial'>Residencial</option>
                                    <option value='comercial'>Comercial</option>
                                    <option value='celular'>Celular</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <a href='javascript:void(0)' onclick='addInputTelContact("item-tel-adicional-${posContainer}","contact_extra","box-tel-adicional-${posContainer}",${posContainer})' class='btn btn-secondary btn-sm mt-2'>
                                    <small class='font-weight-bold'>
                                        Adicionar
                                    </small>                    
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class='col-md-6' id="box-email-adicional-${posContainer}">
                        <div class='row'>
                            <div class='col-md-6'>
                                <label><small class='font-weight-bold'>Empresa</small></label>
                                <input type='text' class='form-control form-control-sm' name='contact_extra[${posContainer}][company]'>
                            </div>
                            <div class='col-md-6'>
                                <label><small class='font-weight-bold'>Cargo</small></label>
                                <input type='text' class='form-control form-control-sm' name='contact_extra[${posContainer}][office]'>
                            </div>
                        </div>
                        <div class='row item-email-adicional-${posContainer}' >
                                
                                <div class='col-md-6'>
                                
                                        <label><small class='font-weight-bold'>Email</small><span class='text-danger'>*</span></label>
                                        <input type='text' class='form-control form-control-sm' name='contact_extra[${posContainer}][email][0][adress]'>
                                </div>
                                <div class='col-md-6'>
                                        <label><small class='font-weight-bold'>Tipo</small><span class='text-danger'>*</span></label>
                                        <select class='form-control form-control-sm' name='contact_extra[${posContainer}][email][0][type]'>
                                            <option value=''>Selecione</option>
                                            <option value='residencial'>Residencial</option>
                                            <option value='comercial'>Comercial</option>
                                            <option value='outro'>Outro</option>
                                        </select>
                                </div>
                            
                            <div class="col-md-6">
                                <a href='javascript:void(0)' onclick='addInputEmailContact("item-email-adicional-${posContainer}","contact_extra","box-email-adicional-${posContainer}",${posContainer})' class='btn btn-secondary btn-sm mt-2'>
                                    <small class='font-weight-bold'>
                                        Adicionar
                                    </small>                    
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row p-2 d-flex justify-content-end">
                            <a href="javascript:void(0)" onclick="removeExtraContact('contact_extra_${posContainer}')" class="btn btn-danger btn-sm"> 
                                <small class="font-weight-bold">
                                    Remover
                                </small>                    
                            </a>
                        </div>
                    </div>
                </div>
                `

            document.querySelector('.card_adicional').innerHTML +=container;
};

function removeExtraContact(extra_contact_container){

    
}
function addInputTelContact(contact_container,contact_area,box_area,index_box){   

    const contItem = document.querySelectorAll(`.${contact_container}`).length;
    const box_tel = 
    `   
    <div class='row ${contact_container}' id="${contact_container}-${contItem}">
        <div class='col-md-6'>                     
                <label><small class='font-weight-bold'>Telefone</small><span class='text-danger'>*</span></label>
                <input type='text' class='form-control form-control-sm' name='${contact_area}[${index_box}][tel][${contItem}][number]'>
        </div>
        <div class='col-md-6'>
                <label ><small class='font-weight-bold'>Tipo</small><span class='text-danger'>*</span></label>
                <select  class='form-control form-control-sm' name='${contact_area}[${index_box}][tel][${contItem}][type]'>
                    <option value=''>Selecione</option>
                    <option value='residencial'>Residencial</option>
                    <option value='comercial'>Comercial</option>
                    <option value='celular'>Celular</option>
                </select>
        </div>
        <div class="col-md-6">
            <a href='javascript:void(0)' onclick='removeInputBox("${contact_container}-${contItem}")' class='btn btn-danger btn-sm mt-2'> 
                <small class='font-weight-bold'>
                    Remover
                </small>                    
            </a>
        </div>
    </div>
    `;
    
    
    document.getElementById(box_area).innerHTML += box_tel;

    

}
function addInputEmailContact(contact_container,contact_area,box_area,index_area){   

    const contItem = document.querySelectorAll(`.${contact_container}`).length;
    const boxEmail = 
    `   
    <div class="row ${contact_container}" id="${contact_container}-${contItem}">
        <div class="col-md-6">
        
                <label><small class="font-weight-bold">Email</small><span class="text-danger">*</span></label>
                <input type="text" class="form-control form-control-sm" name="${contact_area}[${index_area}][email][${contItem}][address]">
        </div>
        <div class="col-md-6">
                <label><small class="font-weight-bold">Tipo</small><span class="text-danger">*</span></label>
                <select class="form-control form-control-sm" name="${contact_area}[${index_area}][email][${contItem}][type]">
                    <option value="">Selecione</option>
                    <option value="residencial">Residencial</option>
                    <option value="comercial">Comercial</option>
                    <option value="outro">Outro</option>
                </select>
        </div>
        <div class="col-md-6">
            <a href="javascript:void(0)" onclick="removeInputBox('${contact_container}-${contItem}')" class="btn btn-danger btn-sm mt-2">
                <small class="font-weight-bold">
                    Remover
                </small>                    
            </a>
        </div>
    </div>
    `;
    document.getElementById(box_area).innerHTML += boxEmail;

}

function removeInputBox(boxItem){
    let element = document.getElementById(boxItem);
    element.remove();
}

    
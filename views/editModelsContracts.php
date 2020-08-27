<div class="container pd-x-0">
    <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
        <div>
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-style1 mg-b-10">
                <li class="breadcrumb-item"><a href="<?php echo BASE_URL;?>">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Editar Modelo de Contrato</li>
            </ol>
            </nav>
            <h4 class="mg-b-0 tx-spacing--1">Editar Modelo de Contrato</h4>
        </div>
    </div>
</div>

<?php if(isset($msg_info) && $msg_info[0] == 'success'):?>
    <div class="alert alert-success"><?php echo $msg_info[1];?></div>
<?php elseif(isset($msg_info) && $msg_info[0] == 'error'):?>
    <div class="alert alert-danger"><?php echo $msg_info[1];?></div>
<?php endif;?>
<form method="POST" enctype="multipart/form-data">

    <div class="form-group">
        <label for="formGroupExampleInput" class="d-block">Empresa</label>
        <select name="empresa" id="" class="form-control">
            <?php foreach($listEmpresas as $item):?>
                <option value="<?php echo $item['id'];?>" <?php echo ($item['id'] == $dadosContrato['id_empresa'])?'selected':'';?>><?php echo $item['nome_fant'];?></option>
            <?php endforeach;?>
        </select>
    </div>
    
    <div class="form-group">
        <label for="formGroupExampleInput" class="d-block">Titulo</label>
        <?php if(isset($dadosContrato['titulo'])):?>
            <input type="text" class="form-control" placeholder="Insira O titulo do contrato" name="title" value="<?php echo $dadosContrato['titulo'];?>">
        <?php else:?>
            <input type="text" class="form-control" placeholder="Insira O titulo do contrato" name="title">
        <?php endif;?>
    </div>

    <div class="form-group">
        <label for="formGroupExampleInput" class="d-block">Corpo do Contrato</label>
        
        <div id="editor" style="min-height: 400px;">
                <?php echo (isset($dadosContrato['contrato_txt']))?$dadosContrato['contrato_txt']:''?>
        </div>
                <input type="hidden" id="campoHidden" name="corpo">
        <div id="teste"></div>
    </div>

    

    <div class="form-group">
        <label for="formGroupExampleInput" class="d-block">Logo da empresa</label>
        <input type="file" class="form-control" name="logo">
    </div>
    
  <button class="btn btn-primary" type="submit">Editar</button>
  <button class="btn btn-secondary" type="cancel">Cancelar</button>
</form>

<script src="//cdn.quilljs.com/1.3.6/quill.js"></script>
<script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script>

<!-- Theme included stylesheets -->
<link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<link href="//cdn.quilljs.com/1.3.6/quill.bubble.css" rel="stylesheet">

<!-- Core build with no theme, formatting, non-essential modules -->
<link href="//cdn.quilljs.com/1.3.6/quill.core.css" rel="stylesheet">
<script src="//cdn.quilljs.com/1.3.6/quill.core.js"></script>

<script>
   

    var options = {
        debug: 'info',
        modules: {
            toolbar: '#toolbar'
        },
        placeholder: 'Compose an epic...',
        readOnly: true,
        theme: 'snow'
    }
    
    var editor = new Quill('#editor', options);
</script>


<!-- Create the editor container -->


<!-- Include the Quill library -->
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

<!-- Initialize Quill editor -->
<script src="<?php echo BASE_URL;?>assets/lib/jquery/jquery.min.js"></script>

<script>
  var toolbarOptions = [
  ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
  ['blockquote', 'code-block'],

  [{ 'header': 1 }, { 'header': 2 }],               // custom button values
  [{ 'list': 'ordered'}, { 'list': 'bullet' }],
  [{ 'script': 'sub'}, { 'script': 'super' }],      // superscript/subscript
  [{ 'indent': '-1'}, { 'indent': '+1' }],          // outdent/indent
  [{ 'direction': 'rtl' }],                         // text direction

  [{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown
  [{ 'header': [1, 2, 3, 4, 5, 6, false] }],

  [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
  [{ 'font': [] }],
  [{ align: '' }, { align: 'center' }, { align: 'right' }, { align: 'justify' }],

  ['clean']                                         // remove formatting button
];

var quill = new Quill('#editor', {
  modules: {
    toolbar: toolbarOptions
  },
  theme: 'snow'
});
</script>

<script>
    
    $('.ql-toolbar').on('mousemove', function(){
        let campoHidden = $('#campoHidden').val(document.querySelector('form #editor .ql-editor').innerHTML);
    });
    $('#editor').on('keyup', function(){
        let campoHidden = $('#campoHidden').val(document.querySelector('form #editor .ql-editor').innerHTML);
    });

    let campoHidden = $('#campoHidden').val(document.querySelector('form #editor .ql-editor').innerHTML);
</script>
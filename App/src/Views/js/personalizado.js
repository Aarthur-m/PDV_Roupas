$(document).ready(function() {
    $('a[data-confirm]').click(function(Event) {
        var href = $(this).attr('href');
        if(!$('#confirm-delete').length) {
            $('body').append('<div class="modal fade" id="confirm-delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-header">Excluir Item<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div><div class="modal-body">Tem certeza que deseja excluir o item selecionado?</div><div class="modal-footer"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button><a type="button" id="dataConfirmOK" class="btn btn-primary">Save changes</a></div></div></div></div>');
        }
        $('#dataConfirmOK').attr("href", href);
        $('#confirm-delete').modal({shown: true});
        return false;
    });
});
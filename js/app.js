var app = {
    init: function(){
        console.log('init');
        $('.item-edit').on('click', app.showEditForm);
    },

    //affiche le formulaire d'édition d'une tache
    showEditForm: function(){

        //on cible le formulaire associé
        var form = $(this).parent().prev();
        //on affiche le formulaire
        form.show();
        //on masque le texte
        var text = form.prev();
        text.hide();

        //on recupere le texte qui est dans le span
        var contenuduSpan = text.text();
        //on affiche le texte de la tache dans le formulaire
        form.find('.item-form-text').val( contenuduSpan );
    }
}
$(app.init);

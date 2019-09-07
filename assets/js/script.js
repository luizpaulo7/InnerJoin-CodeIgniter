$(document).ready(function () {
    
    $(".iconDelete").on('click', function () {
        console.log(this.dataset.idaluno);
        $.confirm({
            title: 'Ação!',
            theme: 'supervan',
            animation: 'zoom',
            closeAnimation: 'scale',
            content: 'Deseja realmente apagar o aluno? <hr>',
            type: 'red',
            typeAnimated: true,
            buttons: {
                close: {
                    text: 'Cancelar',
                    btnClass: 'btn-red',
                    action: function () {
                    }
                },
                confirmar: {
                    text: 'Confirmar',
                    btnClass: 'btn-green',
                    action: function () {
                    }
                },
            }
        });
    });
});
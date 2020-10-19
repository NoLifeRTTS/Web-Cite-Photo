$(document).ready(function () {
    var add = $('.far');
    for(let i = 0; i <add.length; i++) {
        $(add[i]).click(function(e) {
            e.preventDefault();
            let id = $(add[i]).attr('id');
            console.log(id);
            $.ajax({
                type: "POST",
                url : "addwishes.php",
                data : {id: id}
            }).done(function() {
                alert("Добавлено в пожелания");
            }).fail(function() {
                alert("error");
            });
        });
    }
    var addb = $('.fas');
    for(let i = 0; i <addb.length; i++) {
        $(addb[i]).click(function(e) {
            e.preventDefault();
            let idb = $(addb[i]).attr('id');
            console.log(idb);
            $.ajax({
                type: "POST",
                url : "addbasket.php",
                data : {id: idb}
            }).done(function() {
                alert("Добавлено в корзину");
            }).fail(function() {
                alert("error");
            });
        });
    }

    var del = $('.delete');
    for(let i = 0; i <del.length; i++) {
        $(del[i]).click(function(e) {
            e.preventDefault();
            let iddel = $(del[i]).attr('id');
            console.log(iddel);
            $.ajax({
                type: "POST",
                url : "delproduct.php",
                data : {id: iddel}
            }).done(function() {
                alert("Товар убран из корзины");
            }).fail(function() {
                alert("error");
            });
        });
    }
    $('.clear').click(function(e) {
        e.preventDefault();
        console.log('clear');
        $.ajax({
            type: "POST",
            url: "clearbasket.php"
        }).done(function() {
            alert("Очистили корзину");
        }).fail(function() {
            alert("error");
        });
    });
 });
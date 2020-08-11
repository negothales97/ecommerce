$('.input-slug').keyup(function () {
    var slug = slugify($(this).val());
    $(this).val(slug);
});
$(".input-money").maskMoney({
    thousands: '.',
    decimal: ',',
    allowZero: true,
    symbolStay: true
});

$(".input-money").each(function () {
    if ($(this).val() == '') {
        $(this).val('0,00');
    }
});

function slugify(string) {
    const a = 'àáäâãåăæçèéëêǵḧìíïîḿńǹñòóöôœøṕŕßśșțùúüûǘẃẍÿź·/_,:;'
    const b = 'aaaaaaaaceeeeghiiiimnnnooooooprssstuuuuuwxyz------'
    const p = new RegExp(a.split('').join('|'), 'g')
    return string.toString().toLowerCase()
        .replace(/\s+/g, '-') // Replace spaces with -
        .replace(p, c => b.charAt(a.indexOf(c))) // Replace special characters
        .replace(/&/g, '-and-') // Replace & with ‘and’
        .replace(/[^\w\-]+/g, '') // Remove all non-word characters
        .replace(/\-\-+/g, '-') // Replace multiple - with single -
    /*
    .replace(/^-+/, '') // Trim - from start of text
    .replace(/-+$/, '') // Trim - from end of text
    */
}

$('.input-phone').each(function () {
    var phone = $(this).val().replace(/\D/g, '');
    if (phone.length > 10) {
        $(this).inputmask({
            "mask": "(99) 99999-9999",
            "placeholder": " "
        });
    } else {
        $(this).inputmask({
            "mask": "(99) 9999-99999",
            "placeholder": " "
        });
    }
});
$('.input-cep').inputmask({
    "mask": "99999-999",
    "placeholder": "_"
});

$('.input-cnpj').inputmask({
    "mask": "99.999.999/9999-99",
    "placeholder": "_"
});
$('.input-cpf').inputmask({
    "mask": "999.999.999-99",
    "placeholder": "_"
});
$('.input-date').inputmask({
    "mask": "99/99/9999",
    "placeholder": "_"
});


$('.input-phone').focusout(function () {
    var phone = $(this).val().replace(/\D/g, '');
    if (phone.length > 10) {
        $(this).inputmask({
            "mask": "(99) 99999-9999",
            "placeholder": " "
        });
    } else {
        $(this).inputmask({
            "mask": "(99) 9999-99999",
            "placeholder": " "
        });
    }
});



// $('.input-date').datepicker({
//     language: 'pt-BR',
//     format: 'dd/mm/yyyy',
//     autoclose: true
// });

$(".input-kg").maskMoney({
    thousands: '.',
    decimal: ',',
    precision: 3,
    allowZero: true,
    symbolStay: true
});

$(".input-kg").each(function () {
    if ($(this).val() == '') {
        $(this).val('0,000');
    }
});
const inputPrice = $('#price');
const prefixType = $('#prefixType');
const inputQuantitaty = $('#quantitaty');
const inputExpiration_date = $('#expiration_date');
const inputUnity_of_measure = $('#unity_of_measure');
const inputProduct_perishable = $('#product_perishable');
const inputDate_of_manufacture = $('#date_of_manufacture');

inputPrice.mask("999999.99",{ reverse: true });


inputQuantitaty.mask("99999999999",{ reverse: true });
prefixType.html('un');

inputUnity_of_measure.change((e) => {

    switch (e.target.value) {
        case '1':
            inputQuantitaty.mask("99999999999",{ reverse: true });
            prefixType.html('un');
            break;

        case '2':
            inputQuantitaty.mask("999999.999,999", { reverse: true });
            prefixType.html('lt');
            break;

        default:
            inputQuantitaty.mask("999999.999,999", { reverse: true });
            prefixType.html('Kg');
            break;
    }

    console.log('Unidade selecionada', e.target.value)
});

inputProduct_perishable.click((e)=>{
    let state = e.target.checked;
    console.log('Clicou', e.target.checked)
})


document.addEventListener('DOMContentLoaded', () => {
    const id = document.querySelector('#id');
    const pw = document.querySelector('#pw');
    const btn = document.querySelector('#login_btn');

    btn.addEventListener('click', (e) => {
        e.preventDefault();

        if (id.value == '' || pw.value == '') {
            alert('ID 또는 PW 를 입력해 주세요.');
            id.focus();
            return false;
        }

        document.login_form.submit();
    });


});
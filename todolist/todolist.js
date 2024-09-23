document.addEventListener('DOMContentLoaded', () => {
    const todolist_btn = document.querySelector('#todolist_btn');

    todolist_btn.addEventListener('click', () => {
        const subject = document.querySelector('#subject');

        if (subject.value == '') {
            alert("할 일을 입력해 주세요.");
            subject.focus();
            return false;
        }

        document.todolist_form.submit();
    });
});

function checkTodolist(idx) {
    const multi_form = document.querySelector('#multi_form');
    multi_form.mode.value = 'done';
    multi_form.idx.value = idx;
    multi_form.submit();
}

function uncheckTodolist(idx) {
    const multi_form = document.querySelector('#multi_form');
    multi_form.mode.value = 'ongoing';
    multi_form.idx.value = idx;
    multi_form.submit();
}

function deleteTodolist(idx) {
    if (confirm('정말 삭제하시나요?')) {
        const multi_form = document.querySelector('#multi_form');
        multi_form.mode.value = 'delete';
        multi_form.idx.value = idx;
        multi_form.submit();
    }
}
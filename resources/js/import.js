$(document).ready(()=>{

    $('#teacherTable').DataTable({
        scrollY: true,
    });

    $('#importBtn').on('click', ()=>{
        console.log('hello!');
    })

    $('#dtr_import').submit((e)=>{
        alert('hey');
        e.preventDefault();
    })



})

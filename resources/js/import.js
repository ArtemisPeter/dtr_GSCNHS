$(document).ready(()=>{

    $('#teacherTable').DataTable({
        scrollY: true,
    });



    $('#dtr_import').submit((e)=>{
        alert('hey');
        e.preventDefault();
    })



})

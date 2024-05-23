$(document).ready(()=>{

    $('#teacherTable').DataTable({

    })

    $('#teacherTable').on('click','.editbtn', function(){
        $('#updateModal').modal('show')
        $tr = $(this).closest('tr');

        var data = $tr.children('td').map(function(){
            return $(this).text();
        }).get();

        $teacherName = data[0];

        $('#namez').html($teacherName);

        $nameArray = $teacherName.split(' ');
        $fname = $nameArray.slice(0, -1).join(' ')
        $lname = $nameArray.slice(-1).join(' ');

        $('#TeacherFname').val($fname);
        $('#TeacherLname').val($lname);
        $('#officeHours').val(data[1]);
        $('#teacher_Id').val(data[3]);

    })

    $('#closeBtn').on('click', ()=>{
        $('#updateModal').modal('hide');
    })


})

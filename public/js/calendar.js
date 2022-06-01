$(document).ready(function(){
    

    $('.datepicker').datepicker({
        format: 'dd-mm-yyyy',
        autoclose: true,
        startDate: '0d',
        language: 'es'
        
    });
    
    $('.cell').click(function(){
        $('.cell').removeClass('select');
        $(this).addClass('select');
    });
    
    });
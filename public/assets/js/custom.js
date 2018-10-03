$(function() {

    $('.n').click(function() {
     
        
      if ( !$('.n1').text() && $(this).text() !== 'BRANCO' && $(this).text() !== 'CORRIGE') {
          $('.n1').text( $(this).text() );
      } else if ( !$('.n2').text() && $(this).text() !== 'BRANCO' && $(this).text() !== 'CORRIGE') {
          $('.n2').text( $(this).text() );
      }
    
      if( $(this).text() == 'CORRIGE') {
          $('.president').show().html('Presidente').css({'font-size' : '40px'});
          $('.n1').html('');
          $('.n2').html('');
          $('.numbers').show();
          $('.blank-v').hide();
          $('.image').attr('src', '');
          $('.image').hide();
          $('.name').html('');
          $('.broken').html('');
          $('.final-vote').val('');
      } else if ( $(this).text() == 'BRANCO' ) {  
          $('.numbers').hide(); 
          $('.remove').hide();
          $('.blank-v').html('VOTO EM BRANCO');
          $('.blank-v').show();
          $('.image').attr('src', '');
          $('.name').html('');
          $('.image').hide();
          $('.broken').html('');
          $('.final-vote').val('VOTO EM BRANCO');          

      } else if ( $('.n1').text() == '1' && $('.n2').text() == '0' ) {
          $('.numbers').show();
          $('.remove').show();
          $('.image').attr('src', './assets/img/boy.svg');
          $('.image').show();
          $('.name').html('Nome: João Santos');
          $('.broken').html('Partido: PDH');
          $('.final-vote').val('10 - João Santos');
          
      } else if ( $('.n1').text() == '2' && $('.n2').text() == '0' ) {
          $('.numbers').show();
          $('.remove').show();
          $('.image').attr('src', './assets/img/girl.svg');
          $('.image').show();
          $('.name').html('Nome: Maria Alfreda');
          $('.broken').html('Partido: PDM');
          $('.final-vote').val('20 - Maria Alfreda');

      } else if ( $('.n2').text().length == '1' ) {
          $('.numbers').hide(); 
          $('.remove').hide();
          $('.blank-v').html('VOTO NULO');
          $('.blank-v').show();
          $('.image').attr('src', '');
          $('.image').hide();
          $('.final-vote').val('VOTO NULO');
      }
        
        
    });


    $('.urn-form').submit(function() {
        $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });
        
        $.ajax({
            url: '/vote',
            type: 'POST',
            data: $(this).serialize(),
            success: function(data) {
                $('.base').hide();
                $('.president').html('FIM').css({
                    'font-size' : '350px',
                    'text-align' : 'center!important'
                });
                
            } 
        });
        return false;
    });

});
$(function()
{
  $.getJSON('http://freegeoip.net/json/',function(result){
    if(result && result.country_code !== 'US')
    {
      alert('This site is limited to viewers in the United States');
    }
  });
});

jQuery(document).ready(function($){function loadData(page){$('.loader-content').show();$.post(linkData,{page:page,whereNews:whereNews},function(dataResponse){$('.loader-content').hide();$('#dataOtherNews').html(dataResponse);});}loadData(1);$('body').on('click','a.linkRef',function(){var page=$(this).attr('rel');loadData(page);});});
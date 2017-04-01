
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap-theme.min.css">
<link href="news_slider/css/site.css" rel="stylesheet" type="text/css" />
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="news_slider/scripts/jquery.bootstrap.newsbox.min.js" type="text/javascript"></script>

			<div style="background-color: #173e43; border: none;">
			<div class="panel panel-default" style="background-color: #173e43; border: none;">
				<div class="panel-heading1" style="background-color: #c0c0c0;"><h2><font color="#ffffff">Testimonials</font></h2></div>
			<div class="panel-body1">
				<div class="row">
					<div class="col-xs-12">
						<ul class="demo1">
							<li class="news-item" style="border-bottom: none;border-top: none;">
								<table cellpadding="4">
								<tr width="100%">
									<td width="30%"><h4> Amir: 12-jan-2017 </h4></td>
									<td width="70%"><p><strong>  I found it very usefull for traveling</strong></p></td>
								</tr>
								</table>
							</li>
							<li  class="news-item" style="border-bottom: none;border-top: none;">
								<table cellpadding="4">
								<tr>
									<td width="30%"><h4> Arif: 13-jan-2017 </h4></td>
									<td width="70%"><p><strong>  I found it very usefull for traveling</strong></p></td>
									</tr>
								</table>
							</li>
							<li  class="news-item" style="border-bottom: none;border-top: none;">
								<table cellpadding="4">
								<tr>
									<td width="30%"><h4> client 2: 14-jan-2017 </h4></td>
									<td width="70%"><p><strong>  I found it very usefull for traveling</strong></p></td>
									</tr>
								</table>
							</li>
							<li  class="news-item" style="border-bottom: none;border-top: none;">
								<table cellpadding="4">
								<tr>
									<td width="30%"><h4> Client 3: 15-jan-2017 </h4></td>
									<td width="70%"><p><strong>  I found it very usefull for traveling</strong></strong></p></td>
									</tr>
								</table>
							</li>
							<li  class="news-item" style="border-bottom: none;border-top: none;">
								<table cellpadding="4">
								<tr>
									<td width="30%"><h4> Client 4: 15-jan-2017 </h4></td>
									<td width="70%"><p><strong>  I found it very usefull for traveling</strong></strong></p></td>
									</tr>
								</table>
							</li>
						</ul>
					</div>
				</div>
				<div class="panel-footer" style="background-color: #c0c0c0;"> </div>
			</div>
			</div>
			</div>
		</div>

<script type="text/javascript">
    $(function () {
        $(".demo1").bootstrapNews({
            newsPerPage: 3,
            autoplay: true,
			pauseOnHover:true,
            direction: 'up',
            newsTickerInterval: 4000,
            onToDo: function () {
                //console.log(this);
            }
        });
    });
</script>
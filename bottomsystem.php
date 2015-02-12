<!--bottom dock -->
<div class="dock" id="dock2">
  <div class="dock-container2">
  <a class="dock-item2" href="#"><span>研究週報</span><img src="api/img/report.png"    alt="report" /></a>
  <a class="dock-item2" href="#"><span>會議紀錄</span><img src="api/img/meeting.png"   alt="meeting" /></a>
  <a class="dock-item2" href="#"><span>LAB服務 </span><img src="api/img/service.png"   alt="service" /></a>
  <a class="dock-item2" href="#"><span>研究論文</span><img src="api/img/share.png"     alt="share" /></a>
  <a class="dock-item2" href="#"><span>系統平台</span><img src="api/img/system.png"    alt="system" /></a>
  <a class="dock-item2" href="#"><span>程式模組</span><img src="api/img/model.png"     alt="model" /></a>
  <a class="dock-item2" href="#"><span>知識庫  </span><img src="api/img/search.png"    alt="search" /></a>
  <a class="dock-item2" href="#"><span>財產管理</span><img src="api/img/inventory.png" alt="inventory" /></a>
  <a class="dock-item2" href="#"><span>教育推廣</span><img src="api/img/education.png" alt="education" /></a>
  <a class="dock-item2" href="#"><span>後臺管理</span><img src="api/img/back.png"      alt="back" /></a>
  <a class="dock-item2" href="http://ytwu.lst.ncu.edu.tw/wu/ch" target="_blank"><span>wuret   </span><img src="api/img/wurett.png"    alt="wuret" /></a>
  </div>
</div>


<script type="text/javascript">
	$(document).ready(
		function()
		{
			$('#dock2').Fisheye(
				{
					maxWidth: 40,
					items: 'a',
					itemsText: 'span',
					container: '.dock-container2',
					itemWidth: 70,
					proximity: 80,
					alignment : 'left',
					valign: 'bottom',
					halign : 'center'
				}
			)
		}
	);
 </script>
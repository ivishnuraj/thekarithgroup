<div class="container profile_maturity">
	<div class="col-md-4 about-intro hidden-xs hidden-sm">
		<span class="int_098"> we started </span><br>
		<span class="int_087"><strong class="sectionind active" data-active-section="about"> OUR COMPANY  </strong></span><br>
		<span class="int_085">with a <strong class="sectionind" data-active-section="vision">Vision</strong></span><br>
		<span class="int_084">and a <strong class="sectionind" data-active-section="mission">MISSION</strong></span><br>
		<span class="int_083">based on <strong class="sectionind" data-active-section="values">Values</strong></span><br>
		<span class="int_082">that <strong class="sectionind" data-active-section="team">OUR Team</strong></span><br>
		<span class="int_081">upholds at all times </span>
	</div>
</div>

<script type="text/javascript">

(function($) {
  $.expr[":"].onScreen = function(elem) {
    var $window = $(window)
    var viewport_top = $window.scrollTop()
    var viewport_height = $window.height()
    var viewport_bottom = viewport_top + viewport_height
    var $elem = $(elem)
    var top = $elem.offset().top
    var height = $elem.height()
    var bottom = top + height

    return (top >= viewport_top && top < viewport_bottom) ||
           (bottom > viewport_top && bottom <= viewport_bottom) ||
           (height > viewport_height && top <= viewport_top && bottom >= viewport_bottom)
  }
})(jQuery);

$(".sectionind").on("click",function(e){
		$(this).addClass("active");		
		var Identi = $(this).data('active-section');
		$('html, body').animate({
	        scrollTop: $("#"+Identi).offset().top
	    }, 650);
	})

$(function() {
  setInterval(function() {
		$(".sectionind").removeClass("active");
    var Ideama = $("article").filter(":onScreen").attr("id");
    $("[data-active-section='"+Ideama+"']").addClass('active');
  }, 50)                              // repeat every second
})
</script>
<div class="row">
	<div class="col-md-7 col-md-offset-4">

	<article id="about">
		<div class="clearbox"></div>
		<p class="paragraph"> <strong>Karith Design - Build Private Limited</strong> is a progressive and professional full-service construction company based in Trivandrum, Kerala and working throughout South Kerala. When the company was first conceived in 2011 as J & J Associates, we set-out to build a business model that focused on innovative design, honest quality construction and attention to detail. We soon realized the difficulty in sustaining this model as a start-up in the competitive environment of construction. But we persisted and stuck to our ideals. Today, having re-christened the company as Karith Design- Build Private Limited, we operate with a confidence that our past has prepared in us; to embrace the most challenging of projects and create masterpieces out of them.</p>
	</article>
	<article id="vision">
	<div class="col-md-12 me-1"></div>
		<h4 class="identity" >VISION</h4>
	<p class="paragraph">To establish the identity of the company as a brand committed to bringing about innovation, honesty and quality in the construction industry.</p>
	</article>


	<article id="mission">
	<div class="col-md-12 me-1 c">
	</div>
		<h4 class="identity">MISSION</h4>
			<p class="paragraph">To be a front runner in providing innovative products, services and projects to customers on the back bone of a work culture formed of the passion for design and an inherent desire to shape the world towards a better future through meaningful dialogues, exchange and sharing of ideas and fruitful partnerships.</p>
	</article>


	<article id="values">
	<div class="col-md-12 me-1 d"></div>
			<h4 class="identity ">CORE VALUES</h4>
			<div class="table-responsive">
				<table class="table" id="profile_table">
				<tbody>
				<tr>
				<th>Innovation</th>
				<td style="width: 50%;">Bringing about positive change through new concepts, designs and ideas born through ‘out of the box’ thinking and an attitude of collaboration and exchange of thoughts and ideas </td>
				</tr>
				<tr>
				<th>Passion </th>
				<td>To do what we love to do and enjoy what we do; To commit to everything we do, especially the safety and development of our employees, the success of our clients, and the world we inhabit. </td>
				</tr>
				<tr>
				<th>Collaboration </th>
				<td>Collaborate on innovative ideas and leverage collective genius </td>
				</tr>
				<tr>
				<th>Quality </th>
				<td>To provide the best of what you do with unrelenting commitment to perfection and constant up-gradation of what you do </td>
				</tr>
				<tr>
				<th>Integrity </th>
				<td>Trust, Honesty and honor without compromising on the truth</td>
				</tr>
				<tr>
				<th>Responsibility </th>
				<td>Taking accountability for our actions, decisions, products and services</td>
				</tr>
				<tr>
				<th>Nurture </th>
				<td>To develop growth of new talents; to empower our employees to take initiative, lead and take responsibility for their decisions; to adopt an error-embracing environment.</td>
				</tr>
				</tbody>
				</table>
				</div>
	</article>
	<article id="team">
		<?php

$team = array(
	"Sam Joseph, Managing Director" => "sam.jpg,sam@thekarithgroup.com",
	"Graciamma Joseph, Deputy Director" => "grace.jpg,grace@thekarithgroup.com",
	"Jerry Sam Joseph, Operations Director" => "jerry.jpg,jerry@thekarithgroup.com",
	"Jeffrey Sam Joseph, Creative Director" => "jeffrey.jpg,jeffrey@thekarithgroup.com",
	"Minto John Mathew, Business Administration Manager" => "minto.jpg,minto@thekarithgroup.com",
	"Varsha Cleetus, Civil Engineer" => "varsha.jpg,varsha@thekarithgroup.com",
);

?>


<h4 class="identity smallity">OUR TEAM</h4>
  <div class="at-grid" data-column="2">
<?php 
	$datawowdelay = 0;
	foreach ($team as $key => $value) {
		$userInfo = explode(',', $value);
		$userData = explode(',', $key);
		?>
	    <div class="at-column wow fadeIn" data-wow-delay="<?php echo $datawowdelay;?>s">
	      <div class="at-user">
	        <div class="at-user__avatar"><img src="{siteurl}/assets/team/<?php echo $userInfo[0];?>"/></div>
	        <div class="at-user__name"><?php echo $userData[0];?></div>
	        <div class="at-user__title"><?php echo $userData[1];?></div>
	        <ul class="at-social">
	          <li class="at-social__item">
	          	<a href="">
	              <?php echo $userInfo[1];?>
	        	</a>
	        </li>
	        </ul>
	      </div>
	    </div>
		<?php 
		$datawowdelay = $datawowdelay+0.5;
	}

?>
  </div>
	</article>

	</div>
</div>
{% set groups = __SELF__.groups %}

{% for group in groups %}
{% if group.valiants.count %}
	<div class="team-group-name">{{ group.name }}</div>
	{% for valiant in group.valiants %}
		<div class="col-md-2 col-sm-4 col-xs-6">
			   <div class="team-item">
			       <div class="photo" style="background-image: url({{ valiant.avatar.path }});"></div>
			       <a href="{{ ('/solder/' ~ valiant.slug)|url }}" class="name">
			           <span>{{valiant.fullName}}</span>
			       </a>
			       <div class="employment">
			           {{ valiant.position }}
			       </div>
			   </div>
		</div>
	{% endfor %}
{% endif %}
{% endfor %}

{% set groups = __SELF__.groups %}

{% for group in groups %}
{% if group.valianats.count %}
	<div class="team-group-name">{{ group.name }}</div>
	{% for valianat in group.valianats %}
		<div class="col-md-2 col-sm-4 col-xs-6">
			   <div class="team-item">
			       <div class="photo" style="background-image: url({{ valianat.avatar.path }});"></div>
			       <a href="{{ ('/profile/' ~ valianat.slug)|url }}" class="name">
			           <span>{{valianat.fullName}}</span>
			       </a>
			       <div class="employment">
			           {{ valianat.position }}
			       </div>
			   </div>
		</div>
	{% endfor %}
{% endif %}
{% endfor %}
{% set group = __SELF__.group %}
<div>{{ group.description }}</div>
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

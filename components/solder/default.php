<div class="col-md-2 col-sm-4 col-xs-6">
    <div class="team-item">
        <img src="{{ valiant.avatar.path }}" alt="">
        <p>{{ valiant.fullName }}</p>
        <div class="employment">
            {{ valiant.position }}
        </div>
        <p>{{ valiant.bio|raw }}</p>
        {% for link in valiant.links %}
            <div class="links">
                <p>
                    {{ link.description }}
                    <a href="{{ link.url|url }}" {{ link.new_window ? 'target="_blank"' }}><span>{{ link.title }}</span></a>
                </p>
            </div>
        {% endfor %}
    </div>
</div>

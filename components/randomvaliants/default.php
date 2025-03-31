{% for Valiant in randomValiants.valiants %}

    <a href="{{ valiant.url|url  }}" class="page" style="background-image: url({{ valiant.avatar.path }});">
        <div class="filter"></div>
    </a>

{% endfor %}

<div class="description">
    <div class="title">{{ randomValiants.title }}</div>
    <div class="excerpt">
        {{ randomValiants.description }}
    </div>
</div>
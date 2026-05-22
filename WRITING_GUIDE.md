# Writing Guide for Pizzeria Articles

This file is aimed at anyone — human or AI agent — who is creating a new article for [tams.pizza/articles](http://tams.pizza/articles/).

---

## The setting

Articles are written from the perspective of an in-facility reporter covering events inside a secret SCP Foundation research site that is also, somehow, "Tam's Pizzeria." The community context is **Tam's Pizzeria**, a Discord server centred around the game *SCP: Secret Laboratory* (SCP:SL).

Key facts to keep in mind:

- The facility IS the pizzeria. The two things coexist absurdly.
- SCP Foundation terminology is used straight-faced: D-Class personnel, Mobile Task Force (MTF), containment breaches, the O5 Council, redacted names (████), SCPs by number, etc.
- All of this is played completely seriously in tone, which is what makes it funny.
- Pizza, food, and condiments bleed into every aspect of facility life.
- The game SCP:SL is the source of most event hooks: game patches, new SCPs being added, balance changes, in-game items (keycards, MicroHID), etc.

---

## Tone and style

- **Deadpan news-report voice.** Write as if a real journalist is reporting real facility events. Never wink at the reader.
- **Absurdist but internally consistent.** The scenario is ridiculous; the writing treats it as entirely normal.
- **Short paragraphs.** Each paragraph should make one point. Sentences can be punchy.
- **Bold key words** for emphasis, just like a tabloid headline (`<b>ransomware</b>`, `<b>Saucefall</b>`).
- **Italicise quotes.** All in-universe quotes from staff or witnesses use `<i>…</i>`.
- **Redacted names** follow SCP style: `Dr. ████ Johnson` or `████ Ar. Korat`. Use ████ to black out personal names, never descriptive words.
- **Dates** are written in European format: `DD.MM.YYYY` (e.g. `12.07.2019`).
- The facility manager and recurring characters (see README) should appear where natural. Consistency is canon.
- End most articles with an **"In other news"** teaser that hints at the next article or a throwaway joke, then the **author and date** footer.

---

## Owners / authors

| Handle | Real role | When to credit |
|--------|-----------|----------------|
| **Evan** | Co-owner; primary author | Default byline for most articles |
| **Tam** | Co-owner; occasional author | Use when writing something Tam-flavoured or as directed |

The author line goes in the `<div class="author">` at the bottom of the last content block, formatted as:

```html
<div class="author"><i>Evan, DD.MM.YYYY</i></div>
```

---

## HTML structure

Every article page uses the shared stylesheet `/style.css?v3` and follows this layout skeleton:

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags (see below) -->
    <link rel="stylesheet" href="/style.css?v3">
    <script src="/js/static-perf-checker.js" defer></script>
    <!-- Optional page-specific <style> block -->
</head>
<body>
    <div class="back"></div>
    <div class="logo"></div>
    <div class="static"></div>
    <div class="wrap">
        <div class="top"><span>tam's pizzeria</span></div>
        <div class="path">
            <a href="/">home</a> &gt; <a href="/articles/">Articles</a> &gt; <a>Article Title Here</a>
        </div>
        <div class="menu">
            menu
            <a href="/">back</a>
            <a href="/servers/">servers</a>
            <a href="/meet/">staff</a>
            <br>
            <a href="/discord/" rel="nofollow">discord</a>
        </div>
        <div class="content">
            <!-- One or more .contentbox blocks (see below) -->
        </div>
    </div>
</body>
</html>
```

### Content blocks

Content is split into `<div class="contentbox">` sections. Each section contains a `<div class="content">` wrapper. Use separate boxes for:

- The main headline (`contentTitle`)
- Body text / images
- Timeline (`<ul>` or `<ol>`)
- "In other news"
- Author/date

CSS helper classes available inside content boxes:

| Class | Use |
|-------|-----|
| `contentTitle` | Large article headline |
| `contentSubTitle` | Section sub-heading |
| `contentDescription` | Body text wrapper |
| `author` | Author/date line (italic) |
| `contentred` | Warning / danger notice (red text) |

### Images

- Store images locally in the article folder (e.g. `./drone.png`).
- Float right with `style="float: right; margin:5px; border-radius: 20%;"` for inline images.
- Always provide a meaningful `alt` attribute.

---

## Required meta tags

```html
<title>Short Browser Tab Title</title>
<meta charset="UTF-8">
<meta name="title"       property="og:title"       content="Engaging OG Title" />
<meta name="type"        property="og:type"         content="website" />
<meta name="image"       property="og:image"        content="http://tams.pizza/articles/<slug>/<image.png>" />
<meta name="url"         property="og:url"          content="http://tams.pizza/articles/<slug>/" />
<meta name="description" property="og:description"  content="One-sentence teaser." />
<meta property="article:published_time" content="YYYY-MM-DD" />
<meta name="author"      content="Evan">
```

For articles published from mid-2025 onwards, also add Twitter/X card tags (see `pizzadrone/index.html` or `espresso-uprising/index.html` for the pattern).

When the article is **ready to publish**:
- Remove `<meta name="robots" content="noindex,nofollow">` (present in the template for drafts).
- Uncomment and fix `<link rel="canonical" href="http://tams.pizza/articles/<slug>/">`.

---

## Step-by-step: creating a new article

1. **Choose a slug** — a short, URL-safe folder name (e.g. `vending-machine-incident`).
2. **Copy the template:**
   ```
   cp -r template/ <slug>/
   ```
3. **Fill in `index.html`:**
   - Update all meta tags (title, description, image URL, canonical URL, published date, author).
   - Replace placeholder text in `.contentTitle`, `.contentDescription`, and body paragraphs.
   - Update the `<div class="path">` breadcrumb to show the correct article title.
   - Add a timeline (`<ul>`) if the article covers a sequence of events.
   - Add an "In other news" block.
   - Add the `<div class="author">` footer.
4. **Add images** — place them in the article folder. Reference them as `./filename.ext`.
5. **Proofread** — check that tone is deadpan, names are redacted where appropriate, and the date format is `DD.MM.YYYY`.
6. **Mark as ready** — remove the `noindex` meta and uncomment the canonical link.

---

## Common article archetypes

These patterns appear frequently and make good templates for new articles:

| Archetype | Example article | Notes |
|-----------|----------------|-------|
| Game patch / balance change | `106nerf`, `scp500`, `microhid` | Frame the patch note as an in-universe news story |
| Containment incident / breach | `079-incident`, `strange-event` | Include a timestamped event log |
| Seasonal celebration | `pizzeria-christmas`, `pizzeria-summer` | Include a schedule; end with O5 council message |
| Rogue equipment | `espresso-uprising`, `pizzadrone` | Quote a facility expert; add a metrics or timeline block |
| In-universe investigation | `dboysociety`, `overdose` | Interview a scientist; leave conclusion unresolved |

---

## Dos and don'ts

**Do:**
- Keep the in-universe voice consistent — you are a facility reporter, not a meta-commentator.
- Use existing recurring characters where it makes sense (Facility Manager Korat, Lt. Evtonped, Commander Obbas, etc.).
- Reference SCP:SL mechanics and real SCP numbers for authenticity.
- Include one small absurdist food/pizza detail per article at minimum.
- End with `Evan, DD.MM.YYYY` (or `Tam, DD.MM.YYYY`) in the author div.

**Don't:**
- Break the fourth wall or reference Discord/real life directly in article text.
- Invent lore that contradicts established recurring characters.
- Use a different date format than `DD.MM.YYYY` in the author line.
- Forget to redact personal names (use ████).
- Leave the `noindex` meta tag in when publishing.

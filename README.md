# Pizzeria Articles

This repository contains the source HTML for the satirical news articles published on [tams.pizza](http://tams.pizza/articles/). Each article is a short, humorous piece written in the style of SCP Foundation incident reports and news bulletins, set inside the fictional SCP facility that doubles as "Tam's Pizzeria" — the shared universe of the **Tam's Pizzeria** Discord community built around the game *SCP: Secret Laboratory* (SCP:SL).

---

## What is this?

Tam's Pizzeria is a Discord server whose community plays *SCP: Secret Laboratory*. To build lore and keep the community entertained between sessions, the server owners and staff publish fictional "facility news" articles on the website. The articles are written as if produced by an in-universe reporter embedded in the SCP Foundation's secret research facility — covering game updates, bizarre in-game events, seasonal celebrations, and absurdist on-site "incidents", all with a pizza twist.

The tone is intentionally over-the-top: real SCP terminology (D-Class, MTF, containment breaches, the O5 Council, redacted names) mixed with silly food-based humor and gentle digs at the SCP:SL game and its developers.

---

## Owners

| Handle | Role |
|--------|------|
| **Tam** | Co-owner of Tam's Pizzeria; occasional article author |
| **Evan** | Co-owner; primary author of most articles |

---

## Recurring cast (fictional)

These characters appear across multiple articles as part of the shared lore:

| Name | Role |
|------|------|
| Facility Manager A. R. Korat | On-site facility manager; appears in schedules and briefings |
| Assistant Lt. K. Evtonped | Hosts safety seminars at facility events |
| Commander B. Obbas | Runs fireworks shows, bonfires, and other spectacles |
| Dr. ████ Wilson | Head scientist; leads investigations |
| Scientist "Bobbas" | Interviewed expert; known to also sell phones |
| Hubert | SCP:SL developer with a notorious RedBull addiction |
| Pete ████ | On-site janitor; subject of the keycard overdose incident |
| Shades McDboy | Alleged leader of the D-Boys Secret Society |
| Chief Barista Str. Awberry | Maintenance lead; espresso uprising expert |
| Lt. Ras. Aborn | Security Chief; pizza drone incident responder |

---

## Articles

| Folder | Title | Date | Author |
|--------|-------|------|--------|
| `106nerf/` | Has science gone too far? (SCP-106 BBQ sauce nerf) | 2018-05-03 | Evan |
| `scp500/` | SCP-500 is coming soon | 2018-05-04 | Tam |
| `microhid/` | Devs announce full-auto MicroHID *(stub — no HTML yet)* | 2018-05-08 | — |
| `079-incident/` | Dreaded ransomware terrorizes researchers! | 2019-07-12 | Evan |
| `pizzeria-christmas/` | The Pizzeria celebrates Christmas! | 2020-12-22 | Evan |
| `pizzeriaIncident/` | Local pizzeria involved in freak accident *(stub — no HTML yet)* | 2021-05-11 | — |
| `overdose/` | Facility janitor overdoses on keycards | 2022-05-03 | Tam |
| `dboysociety/` | The Secret D-Boys Society | 2022-05-03 | — |
| `pizzeria-summer/` | Summer Solstice Celebration at the Beach! | 2023-06-09 | Evan |
| `strange-event/` | Strange Incidents at the Pizzeria | 2024-08-11 | Evan |
| `pizzadrone/` | Rogue Pizza Drone unleashes Saucefall | 2025-07-05 | Evan |
| `espresso-uprising/` | Rogue Espresso Machine Executes Caffeine Coup | 2025-07-06 | Evan |

---

## Repository structure

```
/
├── README.md                  ← you are here
├── WRITING_GUIDE.md           ← instructions for writing new articles
├── index.html                 ← password-protected article index (rendered on site)
├── template/
│   └── index.html             ← blank article template — copy this for new articles
├── <article-slug>/
│   ├── index.html             ← article page
│   ├── info.json              ← article metadata stub (used for stubs without HTML)
│   └── images/                ← article-specific images (some articles store images
│                                  at root level, e.g. ./drone.png)
└── commit.sh                  ← helper script for committing changes
```

---

## Writing a new article

See **[WRITING_GUIDE.md](./WRITING_GUIDE.md)** for full step-by-step instructions, style guidance, and a checklist.

The short version:
1. Copy `template/index.html` into a new folder named after your article slug.
2. Fill in the meta tags, title, content blocks, and author/date.
3. Place any images in the same folder.
4. Remove the `<meta name="robots" content="noindex,nofollow">` line when the article is ready to publish.
5. Uncomment and fix the `<link rel="canonical">` tag.

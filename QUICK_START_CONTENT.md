# Quick Start: IBEW Content Types & Paragraphs

## Installation Commands

Run these commands to set up your content types and paragraph types:

```bash
# Navigate to your project
cd "E:/Users/thean/drupal 11 ibew theme"

# Make sure DDEV is running
ddev start

# 1. Create all content types and paragraph types
ddev drush php:script setup_content_types.php

# 2. Add paragraph reference fields to content types
ddev drush php:script add_paragraph_fields.php

# 3. Clear cache
ddev drush cr
```

## What Gets Created

### Content Types (6)
1. **News** - News articles and announcements
2. **Event** - Meetings, trainings, outings
3. **Gallery** - Photo galleries
4. **Contractor** - Contractor directory profiles
5. **Member Resource** - Benefits, forms, documents
6. **Basic Page** - General pages

### Paragraph Types (9)
1. **Hero Slider** - Rotating image banners
2. **Text Content** - Rich text blocks
3. **Image with Caption** - Images with captions
4. **Call to Action** - Buttons and action prompts
5. **Card Grid** - Multi-column card layouts
6. **Accordion/FAQ** - Expandable content
7. **Quote/Highlight** - Highlighted text blocks
8. **Video Embed** - YouTube/Vimeo videos
9. **Contact Information** - Structured contact details

## Quick Test

After installation, test by creating content:

```bash
# Check that content types exist
ddev drush entity:info node-type

# Check that paragraph types exist
ddev drush entity:info paragraphs-type
```

Or visit in your browser:
- `/node/add` - See all content types
- `/admin/structure/types` - Manage content types
- `/admin/structure/paragraphs_type` - Manage paragraph types

## Common Tasks

### Create News Post
1. Go to Content → Add content → News
2. Fill in title, body, category
3. Upload featured image
4. Optionally add content sections (paragraphs)
5. Save

### Create Event
1. Go to Content → Add content → Event
2. Set event date, location, type
3. Add event details and image
4. Set registration info if needed
5. Save

### Build Flexible Page
1. Go to Content → Add content → Basic Page
2. Enter title and body
3. Add Content Sections:
   - Click "Add Hero Slider" for a banner
   - Click "Add Text Content" for text blocks
   - Click "Add Call to Action" for buttons
   - Mix and match as needed
4. Save

## File Locations

- `setup_content_types.php` - Main setup script
- `add_paragraph_fields.php` - Paragraph fields script
- `CONTENT_TYPES_README.md` - Full documentation

## Troubleshooting

**Scripts won't run?**
```bash
ddev restart
ddev drush status
```

**Fields not showing?**
```bash
ddev drush cr
ddev drush entity-updates
```

**Need to start over?**
- Delete content types at `/admin/structure/types`
- Delete paragraph types at `/admin/structure/paragraphs_type`
- Re-run scripts

## Next Steps

1. ✅ Run the setup scripts (you are here)
2. Create taxonomy vocabularies for tags
3. Set up Views for news/events listings
4. Configure permissions and user roles
5. Create Twig templates in your theme
6. Add sample content

---

**Need help?** See `CONTENT_TYPES_README.md` for detailed documentation.

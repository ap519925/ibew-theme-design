# IBEW Local 90 - Content Types & Paragraph Types

This documentation describes the content types and paragraph types created for the IBEW Local 90 Drupal 11 website, based on the structure of https://ibewlocal90.org/

## Installation

Run these scripts in order:

```bash
# 1. Create content types and paragraph types
ddev drush php:script setup_content_types.php

# 2. Add paragraph reference fields to content types
ddev drush php:script add_paragraph_fields.php
```

## Content Types

### 1. News (`news`)
**Purpose:** News articles, announcements, and union updates

**Fields:**
- Title (default)
- Body - Main content (required)
- News Category - Dropdown selection
  - Announcement
  - Dues & Fees
  - Events
  - Government Affairs
  - Projects
  - Membership
  - General News
- Featured Image - Upload image for article
- Tags - Taxonomy reference for categorization
- Featured on Homepage - Boolean checkbox
- Content Sections - Paragraph reference for additional flexible content

**Use cases:**
- Union announcements
- Dues information
- Government affairs newsletters
- Project updates
- General news

---

### 2. Event (`event`)
**Purpose:** Meetings, trainings, outings, and union events

**Fields:**
- Title (default)
- Event Date - Date and time (required)
- Event End Date - Optional end date/time
- Location - Short location name
- Full Address - Complete address details
- Event Type - Dropdown selection
  - Meeting
  - Training
  - Membership Outing
  - Tournament
  - Ceremony
  - Social Event
- Description (Body) - Event details
- Event Image - Featured image
- Registration Required - Boolean checkbox
- Registration Link - URL for registration
- Contact Information - Contact details for inquiries
- Content Sections - Additional flexible content

**Use cases:**
- Union meetings
- Training sessions
- Membership outings (golf tournaments, toy drives, etc.)
- Retirement ceremonies
- Social events

---

### 3. Gallery (`gallery`)
**Purpose:** Photo galleries for retirements, outings, and historical events

**Fields:**
- Title (default)
- Gallery Type - Dropdown selection
  - Retirement Ceremony
  - Membership Outing
  - Project Photos
  - Historical
  - Event Photos
- Gallery Date - Date of the event/photos
- Description (Body) - Gallery description
- Images - Multiple image upload (unlimited)

**Use cases:**
- Retirement ceremony photos
- Membership outing albums
- Historical documentation
- Project photo collections
- Event photography

---

### 4. Contractor (`contractor`)
**Purpose:** Contractor profiles for responsible contracting directory

**Fields:**
- Title (node title used for company name)
- Company Name - Official company name
- Contractor Type - Dropdown selection
  - Electrical
  - General Contractor
  - Commercial
  - Industrial
  - Residential
- Contact Name - Primary contact person
- Phone Number - Contact phone
- Email Address - Contact email
- Website - Company website URL
- Address - Company address
- Description (Body) - Company information
- Company Logo - Upload company logo
- Certified Contractor - Boolean checkbox

**Use cases:**
- Contractor directory listings
- Responsible contractor database
- Project submission information

---

### 5. Member Resource (`resource`)
**Purpose:** Member resources, benefits, documents, and information

**Fields:**
- Title (default)
- Resource Category - Dropdown selection
  - Benefits
  - Pension Information
  - Health & Welfare
  - Training Resources
  - Forms & Documents
  - Re-sign Procedures
  - Referrals
- Content (Body) - Resource information
- Downloadable File - Multiple file uploads (PDF, DOC, XLS, TXT)
- External Link - Link to external resources
- Members Only Access - Boolean for access control
- Content Sections - Additional flexible content

**Use cases:**
- Benefits information
- Pension and health documents
- Training materials
- Downloadable forms
- Re-sign procedures
- Referral information

---

### 6. Basic Page (`page`)
**Purpose:** General pages for About, Training, and other static content

**Fields:**
- Title (default)
- Body - Main content
- Content Sections - Full access to all paragraph types for flexible page building

**Use cases:**
- About pages
- Training information
- Leadership profiles
- General informational pages

---

## Paragraph Types

Paragraph types allow flexible, modular content building. Editors can add multiple paragraph components to create rich, varied page layouts.

### 1. Hero Slider (`hero_slider`)
**Purpose:** Large rotating image slider with captions

**Fields:**
- Slide Image - Background image
- Slide Title - Main heading
- Subtitle - Secondary text
- Link - Optional CTA link
- Text Alignment - Left/Center/Right

**Best for:** Homepage hero sections, feature highlights

---

### 2. Text Content (`text_content`)
**Purpose:** Rich text content blocks

**Fields:**
- Heading - Optional section heading
- Text Content - WYSIWYG editor with full HTML

**Best for:** Standard text sections, articles, descriptions

---

### 3. Image with Caption (`image_caption`)
**Purpose:** Images with descriptive captions

**Fields:**
- Image - Upload image
- Caption - Image description
- Photo Credit - Photographer/source credit
- Image Size - Full/Large/Medium/Small

**Best for:** Photo documentation, visual content, galleries

---

### 4. Call to Action (`call_to_action`)
**Purpose:** Prominent buttons or links with descriptions

**Fields:**
- Heading - CTA heading
- Description - Supporting text
- Link/Button - URL and link text (required)
- Style - Primary/Secondary/Text Link

**Best for:** Registration links, important actions, downloads

---

### 5. Card Grid (`card_grid`)
**Purpose:** Grid layout of multiple cards

**Fields:**
- Section Heading - Grid title
- Image - Card image
- Card Title - Card heading (required)
- Card Text - Card description
- Link - Card link
- Columns - 2/3/4 column layout

**Best for:** Feature lists, service grids, resource collections

---

### 6. Accordion/FAQ (`accordion`)
**Purpose:** Expandable/collapsible content sections

**Fields:**
- Title/Question - Accordion header (required)
- Content/Answer - Expandable content (required)
- Open by Default - Boolean to show expanded

**Best for:** FAQs, long content sections, procedures

---

### 7. Quote/Highlight (`quote_highlight`)
**Purpose:** Highlighted text blocks or quotes

**Fields:**
- Quote/Text - Main content (required)
- Author/Source - Attribution
- Style - Quote/Highlight Box/Callout

**Best for:** Testimonials, important notices, pullquotes

---

### 8. Video Embed (`video_embed`)
**Purpose:** Embedded videos from YouTube, Vimeo, etc.

**Fields:**
- Video URL - YouTube/Vimeo URL (required)
- Title - Video title
- Caption/Description - Video description

**Best for:** Training videos, announcements, project documentation

---

### 9. Contact Information (`contact_info`)
**Purpose:** Structured contact details

**Fields:**
- Name/Title - Contact name or department
- Phone Number - Contact phone
- Email Address - Contact email
- Address - Physical address
- Office Hours - Operating hours

**Best for:** Office information, department contacts, help resources

---

## Content Architecture Map

Based on IBEW Local 90 website structure:

### Main Navigation
1. **About** → Basic Pages
   - History
   - Leadership
   - Mission

2. **Training** → Basic Pages + Resources
   - Apprenticeship programs
   - Training schedules
   - Resources

3. **Upcoming Events** → Event Content Type
   - Meetings
   - Trainings
   - Social events

4. **Contractors** → Contractor Content Type
   - Directory listings
   - Project submissions

5. **Members** → Resources + Basic Pages
   - Benefits
   - Pension/Health
   - Re-sign procedures
   - Forms

6. **Galleries** → Gallery Content Type
   - Retirements
   - Outings
   - Historical photos

### Homepage Components
- Hero Slider (paragraph)
- News Feed (view of News content type)
- Upcoming Events (view of Event content type)
- Quick Links (Call to Action paragraphs)

---

## Next Steps

After running the setup scripts:

1. **Configure Taxonomy**
   ```bash
   # Create tags vocabulary if it doesn't exist
   ddev drush config:import --partial --source=modules/custom/your_config
   ```

2. **Set Display Modes**
   - Configure Teaser view modes for News and Events
   - Set up Full view modes for all content types
   - Configure paragraph view modes

3. **Create Views**
   - News listing page
   - Events calendar
   - Gallery overview
   - Contractor directory
   - Resource library

4. **Configure Permissions**
   - Set up roles (Administrator, Editor, Member)
   - Configure content type permissions
   - Set up access control for Members Only resources

5. **Theme Integration**
   - Create Twig templates for each content type
   - Style paragraph components
   - Configure block layouts

6. **Menu Structure**
   - Create main navigation menu
   - Add footer menus
   - Configure breadcrumbs

---

## Usage Examples

### Creating a News Post
1. Content → Add content → News
2. Enter title and body content
3. Select News Category
4. Upload Featured Image
5. Add tags for categorization
6. Check "Featured on Homepage" if applicable
7. Optionally add Content Sections (images, videos, quotes)
8. Publish

### Creating an Event
1. Content → Add content → Event
2. Enter event title
3. Set Event Date and optional End Date
4. Select Event Type
5. Enter Location and Full Address
6. Add event description
7. If registration required, add Registration Link
8. Upload Event Image
9. Add Contact Information
10. Publish

### Building a Flexible Page
1. Content → Add content → Basic Page
2. Enter title and basic body content
3. Add Content Sections:
   - Start with a Hero Slider for visual impact
   - Add Text Content paragraphs for information
   - Insert Call to Action buttons
   - Use Accordions for FAQs
   - Add Contact Information at the bottom
4. Publish

---

## Technical Notes

### Required Modules
- Paragraphs (entity_reference_revisions)
- Field modules (core)
- Node (core)
- Taxonomy (core)
- Telephone (core)
- Link (core)
- Image (core)
- File (core)

### Field Naming Conventions
- `field_` prefix for custom fields
- Descriptive names (e.g., `field_event_date`, `field_hero_image`)
- Consistent naming across content types

### Storage
- Paragraphs use entity_reference_revisions for version control
- Images stored in public files directory
- Documents stored with appropriate MIME type restrictions

---

## Troubleshooting

### Field not appearing
```bash
ddev drush cr
ddev drush entity-updates
```

### Paragraph type not available
- Check that Paragraphs module is enabled
- Verify field configuration includes correct paragraph types
- Clear cache

### Permission issues
- Check content type permissions: Admin → People → Permissions
- Verify user roles have appropriate access
- Check "Members Only" access settings on Resources

---

## Support & Resources

- Drupal Documentation: https://www.drupal.org/docs
- Paragraphs Module: https://www.drupal.org/project/paragraphs
- IBEW Local 90: https://ibewlocal90.org/

---

**Last Updated:** 2025-12-18
**Drupal Version:** 11.x
**Based on:** IBEW Local 90 website structure

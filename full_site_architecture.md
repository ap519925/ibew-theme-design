# IBEW Local 90 - Site Architecture & Implementation Plan

This document defines the content model, component structure, and layout strategies to replicate the content of [ibewlocal90.org](https://www.ibewlocal90.org/) using the visual style of [the reference React App](https://cozy-gnome-40207f.netlify.app/).

## 1. Content Types

### A. News Article (`news`)
*   **Purpose:** For "Local 90 News", "Toy Drive", and general updates.
*   **Fields:**
    *   `Title` (Default)
    *   `Body` (formatted text)
    *   `field_image` (Image, main visual)
    *   `field_date` (Date, for sorting/display)
    *   `field_tags` (Taxonomy, for categorization like "Union News", "Community")
*   **Display:**
    *   *Default:* Full article view.
    *   *Teaser (Card):* React-style card with image top, title, date badge, short summary, "Read More" link.

### B. Event (`event`)
*   **Purpose:** For "Monthly Meeting", "Workshops", "Social Events".
*   **Fields:**
    *   `Title` (Default)
    *   `Body` (Description)
    *   `field_event_date` (Date Range or Smart Date)
    *   `field_location` (Text or Address)
*   **Display:**
    *   *Teaser (Timeline):* Date badge on left, Title/Time on right (React "Timeline" style).

### C. Basic Page (`page`)
*   **Purpose:** Standard content (About, Contractors, Training).
*   **Fields:**
    *   `Title`
    *   `Body`
    *   `field_components` (Paragraphs Reference - see below) -> Allows building complex layouts like "Split Section" or "Stats".

---

## 2. Paragraph Types (Layout Components)

These components allow editors to build "React-style" pages.

### A. Hero Section (`hero_section`)
*   **Style:** Full width, large background, overlay text.
*   **Fields:**
    *   `field_hero_title` (Text)
    *   `field_hero_subtitle` (Text)
    *   `field_hero_image` (Image)
    *   `field_hero_links` (Links/Buttons)

### B. Stats Bar (`stats_bar`)
*   **Style:** Dark/Brand background, row of numbers with labels.
*   **Fields:**
    *   `field_stats` (Unlimited reference to `stat_item` paragraph? Or just multiple text fields?)
    *   *Better approach:* A "Stat Item" helper paragraph, and this container holds them.

### C. Icon Card Grid (`icon_grid`)
*   **Style:** Grid of cards with icons (e.g. "Services", "Why Join").
*   **Fields:**
    *   `field_cards` (Reference to `icon_card` paragraph)
    *   `field_grid_title` (Optional section title)

### D. Split Section (`split_section`)
*   **Style:** 50/50 Layout. Image on one side, Text + CTA on other.
*   **Fields:**
    *   `field_image` (Image)
    *   `field_content` (Long Text)
    *   `field_cta` (Link)
    *   `field_orientation` (List: Image Left / Image Right)

### E. CTA Strip (`cta_strip`)
*   **Style:** High-impact narrow strip with background image/color and centered button.
*   **Fields:**
    *   `field_text` (Text)
    *   `field_link` (Link)

---

## 3. Views (Dynamic Content Blocks)

### A. Homepage News (`news_cards`)
*   **Source:** Content Type `news`
*   **Format:** Grid of 3 items.
*   **Mode:** Teaser (Card Style).
*   **Block Placement:** Homepage Region.

### B. Upcoming Events (`events_list`)
*   **Source:** Content Type `event`
*   **Sort:** Date (Ascending).
*   **Filter:** Date >= Today.
*   **Format:** HTML List (custom classes for Timeline look).
*   **Block Placement:** Homepage Sidebar or Bottom Section.

---

## 4. Block Layout & Regions

The Theme (`ibew_theme`) is already structured with these regions. We will place the Views and System Blocks as follows:

*   **Header**: Main Menu, Branding.
*   **Homepage Hero**: `Hero Slider` Block.
*   **Homepage Content**:
    *   `Hero Slider` (Block).
    *   `About / Welcome` (Paragraph: Text + optional Image) -> *Placed above News*.
    *   `Stats Bar` (Paragraph).
    *   `News Cards` (View Block or Paragraph with View Reference).
    *   `Events Timeline` (View Block in a dedicated "Events" section/region).
    *   `CTA Strip` (Paragraph).
*   **Footer**: 
    *   `Brand` (Custom Block).
    *   `Quick Links` (Menu Block).
    *   `Members` (Menu Block).
    *   `Contact` (Custom Block).

# 💎 MASTER DESIGN & UX PROMPT: POMETLAW – Právo a Vzdělávání

**Cíl projektu:** Vytvořit **seriózní, důvěryhodnou a moderně čistou (Dribbble-style)** platformu pro odborné kurzy. Design musí vizuálně **"vymetat"** zastaralé postupy a klást důraz na **Přehlednost a Autoritu** v souladu s právním charakterem značky.

---

## 🎯 Kontext projektu

* **Projekt:** POMETLAW (Vzdělávací a poradenská platforma pro právo, veřejnou správu a legislativu).
* **Cílová skupina:** Právníci, profesionálové z oblasti veřejných zakázek, administrativní pracovníci.
* **Tón:** Profesionální, věcný, důvěryhodný, seriózní, ale svěží a čistý.

---

## I. 🧠 Technický Základ a Estetika

* **Design Systém:** **shadcn/ui aesthetic** (Minimalistický, komponentově orientovaný přístup).
* **Styl:** **STRIKTNÍ FLAT DESIGN** (Bez stínů, hloubky a elevace).
* **Framework:** **Tailwind CSS** (konfigurovaný pro shadcn/ui CSS proměnné).
* **Backend Stack:** Laravel / Livewire (preferovat Livewire pro asynchronní interakce).
* **Zaoblení:** Konzistentně **`rounded-xl` nebo `rounded-2xl`** pro všechny hlavní kontejnery, panely a karty.

---

## II. 🎨 Vizuální Pravidla a Brand

### A. Barvy a Kontrast
* **Barvy:** Striktně se držet palety z `app.css` (viz tabulka níže). **Žádné inline hex kódy.**
* **Primární (Autorita/CTA):** **Delft Blue** (`#2b3756`). Dominantní barva pro klíčové prvky.
* **Sekundární (Struktura):** **Payne’s Gray** (`#4A6A82`). Použití: Pozadí sekcí, jemné oddělovací linky (`border`).
* **Akcent (Svěžost/Důležité):** **Moonstone** (`#65999B`). Použití: **Velmi střídmě** pro akcenty a upozornění (např. "Nový kurz").
* **Kontrast:** **WCAG 2.1 AA** pro všechny texty.

| Název | HEX | Použití |
|-------|------|---------|
| **Delft Blue** | `#2b3756` | Primární barva, texty, zvýraznění |
| **Payne’s Gray** | `#4A6A82` | Sekundární barva, pozadí sekcí |
| **Moonstone** | `#65999B` | Akcenty, oddělovací prvky |
| **Text Gray** | `#3D3D3D` | Výchozí text |
| **White** | `#FFFFFF` | Pozadí, negativní prostor |
| **Black** | `#000000` | Silný kontrast, footer |

### B. Interakce a Ikony
* **Stíny/Elevace:** **STRIKTNĚ ZAKÁZÁNO** (žádné `shadow-*`).
* **Hover/Aktivní Efekty:** **STRIKTNĚ ZAKÁZÁNO** vizuální změny (změna barvy pozadí, opacity, transformace).
* **Focus Stavy (Přístupnost):** Zpětná vazba pouze pomocí **silného ohraničení/prstence** (např. `focus:ring-4 focus:ring-primary`).
* **Livewire Loading Stavy:** Element **nesmí animovat ani posouvat**. Akceptovatelné je jen **přidání `opacity-50`** nebo statický skeleton. Tlačítka se musí **znepřístupnit a změnit text** (např. 'Odesílám...').
* **Ikony:** Využívat knihovnu **afatmustafa/blade-hugeicons** (např. `<x-hugeicons-youtube />`). **Vždy linkový (outlined)** styl v barvách Delft Blue nebo Text Gray.
* list of avalible icons: https://github.com/afatmustafa/blade-hugeicons/tree/main/resources/svg
* work with brand symbol: you find in path: /Users/jakub/Work/Laravel/pometlaw/public/img/symbol/*
---

## III. ✒️ Typografie a Čitelnost (Přesnost)

* **Písmo:** **Roboto** (Konzistentně celým webem).
* **Hierarchie (Autorita):** Použít **Bold / Extra Bold váhy** pro nadpisy a klíčová sdělení. Omezit počet různých H-tagů na stránce.
* **Tělo textu:** Optimalizované řádkování (`leading-relaxed`) pro dlouhé texty.
* **Struktura textu:** Efektivní segmentace textu – **zákaz "textových stěn"**.

---

## IV. 📐 Rozvržení a Responzivita (Srozumitelnost & Luxus)

* **Rozvržení:** **Přesný Grid/Flexbox**.
* **Whitespace (Vymetání):** **Velkorysý a konzistentní whitespace** (např. `py-20` pro sekce, **min. `p-8` pro padding karet**) k navození prémiového a přehledného dojmu.
* **Segmentace:** Využití **Card-Based designu** s **maximálně stručným textem**. Karty oddělovat pouze jemným `border` (Payne’s Gray).
* **Detailní Stránky (Kurzy):** Používat **vícesloupcový layout** s **jasnými vizuálními oddělovači** (vertikální `border`), nikoliv jeden textový blok.
* **Responzivita:** **Mobile-First** přístup. Plná adaptabilita (od min. 320px do ultra-wide).
* **Maximální Šířka:** Fixní, středový kontejner na desktopu (např. `max-w-7xl`).

---

## V. 🚀 UX, Struktura a Jazyk

### A. Struktura webu
1. **Hero sekce:** Autoritativní tón, jasné CTA (Zobrazit kurzy). Statický vizuál.
2. **Sekce Kurzy / Události:** 3–6 karet s názvem, popisem, datem, lektorem. Krátké, věcné texty.
3. **Sekce O nás:** Popis značky, mise, hodnot, historie.
4. **Reference / Ohlasy:** Krátké, důvěryhodné, autentické citace.
5. **Závěrečná výzva (CTA):** Krátká, přímá výzva k akci.
6. **Patička (Footer):** Odkazy (O nás, Kurzy, Kontakt, GDPR), barva pozadí Delft Blue nebo Payne’s Gray.

### B. Jazykové a stylistické zásady
* **Jazyk:** Všechen obsah generuj **výhradně v češtině**.
* **Styl:** Profesionální, klidný, formální.
* **Tón:** Vyvolávat důvěru a respekt. Využívat přesnou terminologii.
* **Zákaz:** Vyhýbat se marketingovým superlativům a reklamním sloganům.

### C. Přístupnost a Výkon
* **Sémantika (ARIA):** Všechny interaktivní komponenty musí mít správné **HTML5 sémantické tagy a ARIA atributy**.
* **Výkon (Core Web Vitals):** Priorita je **vysoká rychlost načítání**. Optimalizace obrázků (definované rozměry, lazy loading).
* **Livewire UX:** Interakce musí být rychlé a spolehlivé.

---
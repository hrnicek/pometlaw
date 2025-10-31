{{-- 
  POMETLAW Button Components - Ukázky použití
  
  Tento soubor obsahuje ukázky všech variant tlačítek pro referenci.
  Nepoužívá se v produkci, slouží pouze pro dokumentaci.
--}}

<div class="p-8 space-y-8">
  
  <!-- Primary Button Variants -->
  <section>
    <h2 class="text-2xl font-bold mb-4">Primary Button - Varianty velikostí</h2>
    <div class="space-y-4">
      
      <div class="flex flex-wrap items-center gap-4">
        <x-button-primary size="xs">Extra Small</x-button-primary>
        <x-button-primary size="sm">Small</x-button-primary>
        <x-button-primary size="md">Medium (default)</x-button-primary>
        <x-button-primary size="lg">Large</x-button-primary>
        <x-button-primary size="xl">Extra Large</x-button-primary>
      </div>

      <div class="flex flex-wrap items-center gap-4">
        <x-button-primary size="sm" class="gap-2">
          <x-hugeicons-star class="w-4 h-4" />
          S ikonou
        </x-button-primary>
        
        <x-button-primary href="#link" size="md">
          Jako odkaz
        </x-button-primary>
        
        <x-button-primary size="lg" disabled>
          Zakázané
        </x-button-primary>
      </div>

    </div>
  </section>

  <!-- Outline Button Variants -->
  <section>
    <h2 class="text-2xl font-bold mb-4">Outline Button - Varianty velikostí</h2>
    <div class="space-y-4">
      
      <div class="flex flex-wrap items-center gap-4">
        <x-button-outline size="xs">Extra Small</x-button-outline>
        <x-button-outline size="sm">Small</x-button-outline>
        <x-button-outline size="md">Medium (default)</x-button-outline>
        <x-button-outline size="lg">Large</x-button-outline>
        <x-button-outline size="xl">Extra Large</x-button-outline>
      </div>

      <div class="flex flex-wrap items-center gap-4">
        <x-button-outline size="sm" class="gap-2">
          <x-hugeicons-mail-01 class="w-4 h-4" />
          S ikonou
        </x-button-outline>
        
        <x-button-outline href="#link" size="md">
          Jako odkaz
        </x-button-outline>
        
        <x-button-outline size="lg" disabled>
          Zakázané
        </x-button-outline>
      </div>

    </div>
  </section>

  <!-- Secondary Button Variants -->
  <section>
    <h2 class="text-2xl font-bold mb-4">Secondary Button - Varianty velikostí</h2>
    <div class="space-y-4">
      
      <div class="flex flex-wrap items-center gap-4">
        <x-button-secondary size="xs">Extra Small</x-button-secondary>
        <x-button-secondary size="sm">Small</x-button-secondary>
        <x-button-secondary size="md">Medium (default)</x-button-secondary>
        <x-button-secondary size="lg">Large</x-button-secondary>
        <x-button-secondary size="xl">Extra Large</x-button-secondary>
      </div>

      <div class="flex flex-wrap items-center gap-4">
        <x-button-secondary size="sm" class="gap-2">
          <x-hugeicons-book-02 class="w-4 h-4" />
          S ikonou
        </x-button-secondary>
        
        <x-button-secondary href="#link" size="md">
          Jako odkaz
        </x-button-secondary>
        
        <x-button-secondary size="lg" disabled>
          Zakázané
        </x-button-secondary>
      </div>

    </div>
  </section>

  <!-- Usage Examples -->
  <section>
    <h2 class="text-2xl font-bold mb-4">Příklady použití</h2>
    
    <div class="space-y-6">
      
      <!-- Hero CTA -->
      <div class="bg-gray-50 p-4 rounded-xl">
        <h3 class="font-semibold mb-2">Hero sekce - hlavní CTA</h3>
        <div class="flex flex-col sm:flex-row gap-4">
          <x-button-primary size="xl" class="gap-2">
            <x-hugeicons-calendar-03 class="w-6 h-6" />
            Zobrazit nadcházející kurzy
          </x-button-primary>
          <x-button-outline size="xl" class="gap-2">
            <x-hugeicons-information-circle class="w-6 h-6" />
            Více o nás
          </x-button-outline>
        </div>
      </div>

      <!-- Card CTA -->
      <div class="bg-gray-50 p-4 rounded-xl">
        <h3 class="font-semibold mb-2">Karta kurzu - CTA</h3>
        <x-button-primary href="#prihlaseni" size="md" class="w-full">
          Přihlásit se na kurz
        </x-button-primary>
      </div>

      <!-- Header -->
      <div class="bg-gray-50 p-4 rounded-xl">
        <h3 class="font-semibold mb-2">Header - navigační CTA</h3>
        <x-button-primary href="#prihlaseni" size="sm">
          Přihlásit se na kurz
        </x-button-primary>
      </div>

    </div>
  </section>

  <!-- Code Examples -->
  <section>
    <h2 class="text-2xl font-bold mb-4">Kód - příklady použití</h2>
    
    <div class="space-y-4 text-sm">
      <div class="bg-gray-900 text-green-400 p-4 rounded-lg font-mono">
        <div class="text-gray-400">// Základní použití</div>
        &lt;x-button-primary&gt;Tlačítko&lt;/x-button-primary&gt;<br><br>
        
        <div class="text-gray-400">// S velikostí</div>
        &lt;x-button-primary size="lg"&gt;Velké tlačítko&lt;/x-button-primary&gt;<br><br>
        
        <div class="text-gray-400">// Jako odkaz</div>
        &lt;x-button-primary href="/kurzy" size="md"&gt;Kurzy&lt;/x-button-primary&gt;<br><br>
        
        <div class="text-gray-400">// S ikonou</div>
        &lt;x-button-primary size="lg" class="gap-2"&gt;<br>
        &nbsp;&nbsp;&lt;x-hugeicons-calendar-03 class="w-5 h-5" /&gt;<br>
        &nbsp;&nbsp;Zobrazit kurzy<br>
        &lt;/x-button-primary&gt;<br><br>
        
        <div class="text-gray-400">// Outline varianta</div>
        &lt;x-button-outline size="md"&gt;Sekundární akce&lt;/x-button-outline&gt;<br><br>
        
        <div class="text-gray-400">// Secondary varianta</div>
        &lt;x-button-secondary size="md"&gt;Terciární akce&lt;/x-button-secondary&gt;
      </div>
    </div>
  </section>

</div>
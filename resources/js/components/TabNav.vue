<template>
  
  <div class="Polaris-Tabs__Wrapper">
    <div class="Polaris-Tabs Polaris-Tabs__TabMeasurer">
      <li v-for="tab in tabs" :key="tab" class="Polaris-Tabs__TabContainer" role="presentation">
        <button :id="tab + 'Measurer'" :class="{ 'Polaris-Tabs__Tab--selected' : tab == selected }" role="tab" type="button" tabindex="-1" class="Polaris-Tabs__Tab" aria-selected="true">
          <span class="Polaris-Tabs__Title">{{ tab }}</span>
        </button>
      </li>
    
      <button type="button" class="Polaris-Tabs__DisclosureActivator" aria-label="More tabs">
        <span class="Polaris-Tabs__Title">
          <span class="Polaris-Icon Polaris-Icon--colorSubdued Polaris-Icon--applyColor">
            <span class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--regular Polaris-Text--visuallyHidden">
            </span>
            <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
              <path d="M6 10a2 2 0 1 1-4.001-.001 2 2 0 0 1 4.001.001zm6 0a2 2 0 1 1-4.001-.001 2 2 0 0 1 4.001.001zm6 0a2 2 0 1 1-4.001-.001 2 2 0 0 1 4.001.001z">
              </path>
            </svg>
          </span>
        </span>
      </button>
    </div>
    <ul role="tablist" class="Polaris-Tabs">
      <li v-for="tab in tabs" :key="tab" class="Polaris-Tabs__TabContainer" role="presentation">
        <button :class="{ 'Polaris-Tabs__Tab--selected' : tab === selected }" :id="tab" role="tab" type="button" tabindex="0" class="Polaris-Tabs__Tab" aria-selected="true" :aria-controls="tab" :aria-label="tab" @click="setTab(tab)">
          <span class="Polaris-Tabs__Title">
            <span class="Polaris-Text--root Polaris-Text--bodyMd Polaris-Text--regular">{{ tab }}</span>
          </span>
        </button>
      </li>
      
      <li class="Polaris-Tabs__DisclosureTab" role="presentation">
        <div>
          <button type="button" class="Polaris-Tabs__DisclosureActivator" aria-label="More tabs" tabindex="0" aria-controls="Polarispopover1" aria-owns="Polarispopover1" aria-expanded="false">
            <span class="Polaris-Tabs__Title">
              <span class="Polaris-Icon Polaris-Icon--colorSubdued Polaris-Icon--applyColor">
                <span class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--regular Polaris-Text--visuallyHidden">
                </span>
                <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                  <path d="M6 10a2 2 0 1 1-4.001-.001 2 2 0 0 1 4.001.001zm6 0a2 2 0 1 1-4.001-.001 2 2 0 0 1 4.001.001zm6 0a2 2 0 1 1-4.001-.001 2 2 0 0 1 4.001.001z">
                  </path>
                </svg>
              </span>
            </span>
          </button>
        </div>
      </li>
    </ul>
  </div>

  <slot></slot>
</template>
<script>
export default {
  props: {
    tabs: {
      type: Array,
      required: true,
    },
    selected: {
      type: String,
      required: true,
    }
  },
  methods: {
    setTab(tab) {
      this.$emit('selected', tab);
    },
  },
};
</script>
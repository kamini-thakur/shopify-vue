<template>
    <div class="Polaris-Page-Header Polaris-Page-Header--hasNavigation Polaris-Page-Header--mediumTitle">
        <div class="Polaris-Page-Header__Row">
          <div class="Polaris-Page-Header__BreadcrumbWrapper">
            <nav role="navigation">
              <a v-on:click="this.$router.push({name: 'home'})" class="Polaris-Breadcrumbs__Breadcrumb" data-polaris-unstyled="true">
                <span class="Polaris-Breadcrumbs__Icon">
                  <span class="Polaris-Icon">
                    <span class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--regular Polaris-Text--visuallyHidden">
                    </span>
                    <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                      <path d="M17 9h-11.586l3.293-3.293a.999.999 0 1 0-1.414-1.414l-5 5a.999.999 0 0 0 0 1.414l5 5a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414l-3.293-3.293h11.586a1 1 0 1 0 0-2z">
                      </path>
                    </svg>
                  </span>
                </span>
                <span class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--regular Polaris-Text--subdued Polaris-Text--visuallyHidden">Bundles</span>
              </a>
            </nav>
          </div>
          <div class="Polaris-Page-Header__TitleWrapper">
            <h1 class="Polaris-Header-Title">Design your builder</h1>
          </div>
        </div>
    </div>

<div class="Polaris-Layout create-builder-page">
  <div class="Polaris-Layout__Section">
    <div class="Polaris-Card">
      <TabNav :tabs="['Setup', 'Products', 'Pricing', 'Design']" :selected="selected" @selected="setSelected" >
        <Tab :isSelected="selected === 'Setup'">
            <div class="Polaris-Tabs__Panel" id="setup-content-1" role="tabpanel" aria-labelledby="setup-1" tabindex="-1">

              <div class="Polaris-Page Polaris-Page--fullWidth">
                <div class="Polaris-Page__Content">
                    <div class="Polaris-Layout">
                        <div class="Polaris-Layout__AnnotatedSection">
                            <div class="Polaris-Layout__AnnotationWrapper">
                                <div class="Polaris-Layout__Annotation">
                                    <div class="Polaris-TextContainer">
                                        <h2 class="Polaris-Text--root Polaris-Text--headingMd Polaris-Text--semibold">Bundle details</h2>
                                        <div class="Polaris-Box" style="--pc-box-color:var(--p-text-subdued);">
                                            <p>Name your bundle, upload a header image and let your users know what the bundles' criteria are by adding a description.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="Polaris-Layout__AnnotationContent">
                                    <div class="Polaris-Card">
                                        <div class="Polaris-Card__Section">
                                            <div class="Polaris-FormLayout">
                                                <div class="Polaris-FormLayout__Item">
                                                    <a id="error-internalName"></a>
                                                </div>
                                                <div class="Polaris-FormLayout__Item">
                                                    <div class="">
                                                        <div class="Polaris-Labelled__LabelWrapper">
                                                            <div class="Polaris-Label">
                                                                <label id="PolarisTextField52Label" for="PolarisTextField52" class="Polaris-Label__Text"><span class="Polaris-Text--root Polaris-Text--bodyMd Polaris-Text--regular">Bundle name</span></label>
                                                            </div>
                                                        </div>
                                                        <div class="Polaris-Connected">
                                                            <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                                <div class="Polaris-TextField Polaris-TextField--hasValue">
                                                                    <input v-model="bundle.bundle_name" name="internal-name" id="PolarisTextField52" autocomplete="1" class="Polaris-TextField__Input" type="text" aria-describedby="PolarisTextField52HelpText" aria-labelledby="PolarisTextField52Label" aria-invalid="false">
                                                                    <div class="Polaris-TextField__Backdrop"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Polaris-Labelled__HelpText" id="PolarisTextField52HelpText">
                                                            <span class="Polaris-Text--root Polaris-Text--bodyMd Polaris-Text--regular Polaris-Text--break Polaris-Text--subdued">This will only be used in your Shopify dashboard; it won't be visible to customers.</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="Polaris-FormLayout__Item"><a id="error-externalName"></a></div>
                                                <div class="Polaris-FormLayout__Item">
                                                    <div class="">
                                                        <div class="Polaris-Labelled__LabelWrapper">
                                                            <div class="Polaris-Label">
                                                                <label id="PolarisTextField53Label" for="PolarisTextField53" class="Polaris-Label__Text"><span class="Polaris-Text--root Polaris-Text--bodyMd Polaris-Text--regular">Product name</span></label>
                                                            </div>
                                                        </div>
                                                        <div class="Polaris-Connected">
                                                            <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                                <div class="Polaris-TextField Polaris-TextField--hasValue">
                                                                    <input v-model="bundle.product_name" name="external-name" id="PolarisTextField53" autocomplete="1" class="Polaris-TextField__Input" type="text" aria-describedby="PolarisTextField53HelpText" aria-labelledby="PolarisTextField53Label" aria-invalid="false">
                                                                    <div class="Polaris-TextField__Backdrop"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Polaris-Labelled__HelpText" id="PolarisTextField53HelpText">
                                                            <span class="Polaris-Text--root Polaris-Text--bodyMd Polaris-Text--regular Polaris-Text--break Polaris-Text--subdued">This is the bundle name your customers will see in the checkout and email notifications.</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="Polaris-Layout__AnnotatedSection" id="product-setup">
                            <div class="Polaris-Layout__AnnotationWrapper">
                                <div class="Polaris-Layout__Annotation">
                                    <div class="Polaris-TextContainer">
                                        <h2 class="Polaris-Text--root Polaris-Text--headingMd Polaris-Text--semibold">Bundle structure</h2>
                                        <div class="Polaris-Layout__AnnotationDescription">
                                            <div class="Polaris-TextContainer"><p>Choose a suitable layout for your bundle.</p><p>PLEASE NOTE: this cannot be changed once the bundle has been created.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="Polaris-Layout__AnnotationContent">
                                    <a id="error-layout"></a>
                                    <div class="Polaris-Card">
                                        <div class="Polaris-Card__Section">
                                            <div>
                                                <label class="Polaris-Choice" for="PolarisRadioButton45">
                                                    <span class="Polaris-Choice__Control">
                                                        <span class="Polaris-RadioButton">
                                                            <input v-model="bundle.bundle_type" value="Single page" id="PolarisRadioButton45" name="bundle-type" type="radio" class="Polaris-RadioButton__Input" aria-describedby="PolarisRadioButton45HelpText"><span class="Polaris-RadioButton__Backdrop"></span>
                                                        </span>
                                                    </span>
                                                    <span class="Polaris-Choice__Label"><span class="Polaris-Text--root Polaris-Text--bodyMd Polaris-Text--regular">Single page</span></span>
                                                </label>
                                                <div class="Polaris-Choice__Descriptions">
                                                    <div class="Polaris-Choice__HelpText" id="PolarisRadioButton45HelpText">
                                                        <span class="Polaris-Text--root Polaris-Text--bodyMd Polaris-Text--regular Polaris-Text--subdued">Display all available bundle products on a single page.</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <label class="Polaris-Choice" for="PolarisRadioButton46">
                                                    <span class="Polaris-Choice__Control">
                                                        <span class="Polaris-RadioButton">
                                                            <input v-model="bundle.bundle_type" value="Multiple sections" id="PolarisRadioButton46" name="bundle-type" type="radio" class="Polaris-RadioButton__Input" aria-describedby="PolarisRadioButton46HelpText" checked>
                                                            <span class="Polaris-RadioButton__Backdrop"></span>
                                                        </span>
                                                    </span>
                                                    <span class="Polaris-Choice__Label"><span class="Polaris-Text--root Polaris-Text--bodyMd Polaris-Text--regular">Multiple sections</span></span>
                                                </label>
                                                <div class="Polaris-Choice__Descriptions">
                                                    <div class="Polaris-Choice__HelpText" id="PolarisRadioButton46HelpText">
                                                        <span class="Polaris-Text--root Polaris-Text--bodyMd Polaris-Text--regular Polaris-Text--subdued">Break the bundle up into distinct sections, so the customer can
                                                        build their bundle step by step, or use the sections to categorise your products.</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="Polaris-PageActions">
                        <div class="Polaris-Stack Polaris-Stack--spacingTight Polaris-Stack--distributionEqualSpacing">
                            <div class="Polaris-Stack__Item">
                                <div class="Polaris-ButtonGroup">
                                    <div class="Polaris-ButtonGroup__Item">
                                        <button class="Polaris-Button" type="button"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Cancel</span></span></button>
                                    </div>
                                </div>
                            </div>
                            <div class="Polaris-Stack__Item">
                                <button v-on:click="next" class="Polaris-Button Polaris-Button--primary" aria-disabled="false" type="button"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Next</span></span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </Tab>

    <Tab :isSelected="selected === 'Products'">
        <div class="Polaris-Tabs__Panel" id="products-content-1" role="tabpanel" aria-labelledby="products-1" tabindex="-1">
            <div class="Polaris-Page Polaris-Page--fullWidth">
                <div class="Polaris-Page__Content">
                    <div class="Polaris-Card__Section">
                        <div class="Polaris-Layout">
        <div class="Polaris-Layout__Section">
            <div style="margin-bottom: 1rem;">
                <h2 class="Polaris-Text--root Polaris-Text--headingMd Polaris-Text--semibold">Sections</h2>
            </div>
            <div class="Polaris-Card">
                <div class="Polaris-Card__Section" v-show="bundle.sections.length > 0 && !showCreateSection">
                    <div class="Polaris-Layout">
                        <div class="Polaris-Layout__Section">
                            
                            <div class="product-image-list product-list-padding sections-added">
                                <ul class="Polaris-ResourceList" aria-live="polite">
                                    <li v-for="(section, index) in bundle.sections" :key="index" class="Polaris-ResourceList__ItemWrapper bundle-item">
                                        <div class="Polaris-ResourceItem Polaris-ResourceItem--persistActions">
                                        <div class="Polaris-ResourceItem__Container">
                                            <div class="Polaris-ResourceItem__Owned">
                                                <div class="Polaris-ResourceList-Item__Media">
                                                    <span class="Polaris-Thumbnail Polaris-Thumbnail--sizeMedium">
                                                        <img alt="" :src="section.items[0].images[0]?.originalSrc">
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="Polaris-ResourceItem__Content">
                                                <h3 class="Polaris-Text--root Polaris-Text--bodyMd Polaris-Text--bold">{{ section.title }}</h3>
                                            </div>
                                            <div class="Polaris-ResourceItem__Actions">
                                                <div class="Polaris-ButtonGroup">
                                                    <div class="Polaris-ButtonGroup__Item">
                                                        <button v-on:click="editSection(section)" class="Polaris-Button" type="button"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Edit section</span></span></button>
                                                    </div>
                                                    <div class="Polaris-ButtonGroup__Item">
                                                        <button v-on:click="removeSection(index)" class="Polaris-Button" type="button"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Remove</span></span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                        </div>
                                    </li>
                                </ul>
                            </div> 
                        </div>
                    </div>
                </div>

                <!-- <div class="Polaris-Card__Section" v-show="sections.length <= 0 || showEditSection">
                    <div class="Polaris-FormLayout">
                        <div class="Polaris-FormLayout__Item">
                            <div class="">
                                <div class="Polaris-Labelled__LabelWrapper"><div class="Polaris-Label"><label id="PolarisTextField5Label" for="PolarisTextField5" class="Polaris-Label__Text"><span class="Polaris-Text--root Polaris-Text--bodyMd Polaris-Text--regular">Section name</span></label></div></div>
                                <div class="Polaris-Connected"><div class="Polaris-Connected__Item Polaris-Connected__Item--primary"><div class="Polaris-TextField Polaris-TextField--hasValue">
                                    <input v-model="section.title" placeholder="The name your customers will see for the bundle in checkout and email notifications" autocomplete="1" class="Polaris-TextField__Input" type="text" aria-labelledby="PolarisTextField5Label" aria-invalid="false"><div class="Polaris-TextField__Backdrop"></div></div></div></div></div>
                        </div>
                        <div class="Polaris-FormLayout__Item">
                            <div class=""><div class="Polaris-Labelled__LabelWrapper"><div class="Polaris-Label"><label id="PolarisTextField6Label" for="PolarisTextField6" class="Polaris-Label__Text"><span class="Polaris-Text--root Polaris-Text--bodyMd Polaris-Text--regular">Description</span></label></div></div><div class="Polaris-Connected"><div class="Polaris-Connected__Item Polaris-Connected__Item--primary"><div class="Polaris-TextField Polaris-TextField--hasValue Polaris-TextField--multiline"><textarea v-model="section.desc" autocomplete="1" class="Polaris-TextField__Input" type="text" rows="5" aria-labelledby="PolarisTextField6Label" aria-invalid="false" aria-multiline="true" style="height: 130px;"></textarea><div class="Polaris-TextField__Backdrop"></div><div aria-hidden="true" class="Polaris-TextField__Resizer"><div class="Polaris-TextField__DummyInput"><br></div><div class="Polaris-TextField__DummyInput"><br><br><br><br><br></div></div></div></div></div>
                            </div>
                        </div>
                    </div>
                </div> -->

                <div class="Polaris-Card__Section" v-show="bundle.sections.length <= 0 || showCreateSection">
                    <div class="Polaris-FormLayout">
                        <div class="Polaris-FormLayout__Item">
                            <div class="">
                                <div class="Polaris-Labelled__LabelWrapper"><div class="Polaris-Label"><label id="PolarisTextField5Label" for="PolarisTextField5" class="Polaris-Label__Text"><span class="Polaris-Text--root Polaris-Text--bodyMd Polaris-Text--regular">Section name</span></label></div></div>
                                <div class="Polaris-Connected"><div class="Polaris-Connected__Item Polaris-Connected__Item--primary"><div class="Polaris-TextField Polaris-TextField--hasValue">
                                    <input v-model="section.title" placeholder="The name your customers will see for the bundle in checkout and email notifications" autocomplete="1" class="Polaris-TextField__Input" type="text" aria-labelledby="PolarisTextField5Label" aria-invalid="false"><div class="Polaris-TextField__Backdrop"></div></div></div></div></div>
                        </div>
                        <div class="Polaris-FormLayout__Item">
                            <div class=""><div class="Polaris-Labelled__LabelWrapper"><div class="Polaris-Label"><label id="PolarisTextField6Label" for="PolarisTextField6" class="Polaris-Label__Text"><span class="Polaris-Text--root Polaris-Text--bodyMd Polaris-Text--regular">Description</span></label></div></div><div class="Polaris-Connected"><div class="Polaris-Connected__Item Polaris-Connected__Item--primary"><div class="Polaris-TextField Polaris-TextField--hasValue Polaris-TextField--multiline"><textarea v-model="section.desc" autocomplete="1" class="Polaris-TextField__Input" type="text" rows="5" aria-labelledby="PolarisTextField6Label" aria-invalid="false" aria-multiline="true" style="height: 130px;"></textarea><div class="Polaris-TextField__Backdrop"></div><div aria-hidden="true" class="Polaris-TextField__Resizer"><div class="Polaris-TextField__DummyInput"><br></div><div class="Polaris-TextField__DummyInput"><br><br><br><br><br></div></div></div></div></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="Polaris-Card__Section" v-show="section.items.length > 0 && showCreateSection">
                <div class="Polaris-Layout">
                    <div class="Polaris-Layout__Section">
                        <div class="product-image-list product-list-padding sections-added">
                        <ul class="Polaris-ResourceList" aria-live="polite">
                            <li v-for="(item, i) in section.items" :key="i" class="Polaris-ResourceList__ItemWrapper bundle-item">
                                <div class="Polaris-ResourceItem Polaris-ResourceItem--persistActions">
                                <div class="Polaris-ResourceItem__Container">
                                    <div class="Polaris-ResourceItem__Owned">
                                        <div class="Polaris-ResourceList-Item__Media">
                                            <span class="Polaris-Thumbnail Polaris-Thumbnail--sizeMedium">
                                                <img alt="" :src="item.images[0]?.originalSrc">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="Polaris-ResourceItem__Content">
                                        <h3 class="Polaris-Text--root Polaris-Text--bodyMd Polaris-Text--bold">{{ item.title }}</h3>
                                    </div>
                                    
                                    <div class="Polaris-ResourceItem__Actions">
                                        <div class="Polaris-ButtonGroup">
                                            <div class="Polaris-ButtonGroup__Item">
                                                <button v-on:click="removeItem(i)" class="Polaris-Button" type="button"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Remove</span></span></button>
                                            </div>
                                        </div>
                                    </div>
                                    </div> 
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

                <div class="Polaris-Card__Section" v-show="bundle.sections.length <= 0 || showCreateSection">
                    <div class="Polaris-Stack"><div class="Polaris-Stack__Item"><button v-on:click="openProductPicker()" class="Polaris-Button" type="button"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Add products</span></span></button></div></div>
                </div>
            </div>

            <div class="Polaris-PageActions" v-show="bundle.sections.length <= 0 || showCreateSection">
                <div class="Polaris-Stack Polaris-Stack--spacingTight Polaris-Stack--distributionEqualSpacing">
                    <div class="Polaris-Stack__Item">
                        <div class="Polaris-ButtonGroup">
                            <div class="Polaris-ButtonGroup__Item">
                                <button v-on:click="showCreateSection = !showCreateSection" class="Polaris-Button" type="button"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Cancel</span></span></button>
                            </div>
                        </div>
                    </div>
                    <div class="Polaris-Stack__Item">
                        <button v-on:click="saveSection" class="Polaris-Button Polaris-Button--primary" type="button"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Save section</span></span></button>
                    </div>
                </div>
            </div>

        </div>

        <div class="Polaris-Layout__Section" v-show="bundle.sections.length > 0 && !showCreateSection">
            <div class="product-add-button">
                <button class="Polaris-Button" type="button" v-on:click="addNewSection"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Add a new section</span></span></button>
            </div>
        </div>

        </div>
        </div>
                    <div class="Polaris-PageActions">
                        <div class="Polaris-Stack Polaris-Stack--spacingTight Polaris-Stack--distributionTrailing">
                            <div class="Polaris-Stack__Item">
                                <button v-on:click="next" class="Polaris-Button Polaris-Button--primary" aria-disabled="false" type="button"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Next</span></span></button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </Tab>

    <Tab :isSelected="selected === 'Pricing'">
        <div class="Polaris-Tabs__Panel" id="pricing-content-1" role="tabpanel" aria-labelledby="pricing-1" tabindex="-1">

            <div class="Polaris-Page Polaris-Page--fullWidth">
    <div class="Polaris-Page__Content">
        <div class="Polaris-Layout">
            <div class="Polaris-Layout__AnnotatedSection" id="pricing-section">
                <div class="Polaris-Layout__AnnotationWrapper">
                    <div class="Polaris-Layout__Annotation">
                        <div class="Polaris-TextContainer">
                            <h2 class="Polaris-Text--root Polaris-Text--headingMd Polaris-Text--semibold">Pricing</h2>
                            <div class="Polaris-Layout__AnnotationDescription">
                                <p>Add an optional discount to your bundle.</p>
                            </div>
                        </div>
                    </div>
                    <div class="Polaris-Layout__AnnotationContent">
                        <div class="Polaris-Card">
                            <div class="Polaris-Card__Section">
                                <div class="Polaris-FormLayout">
                                    <div class="Polaris-FormLayout__Item">
                                        <div>
                                            <label class="Polaris-Choice" for="PolarisRadioButton121"><span class="Polaris-Choice__Control"><span class="Polaris-RadioButton">
                                                <input v-model="bundle.discount_type" value="Flat discount" id="PolarisRadioButton121" name="PolarisRadioButton121" type="radio" class="Polaris-RadioButton__Input" aria-describedby="PolarisRadioButton121HelpText" checked="">
                                                <span class="Polaris-RadioButton__Backdrop"></span></span></span><span class="Polaris-Choice__Label"><span class="Polaris-Text--root Polaris-Text--bodyMd Polaris-Text--regular">Flat discount</span></span></label>
                                            <div class="Polaris-Choice__Descriptions">
                                                <div class="Polaris-Choice__HelpText" id="PolarisRadioButton121HelpText"><span class="Polaris-Text--root Polaris-Text--bodyMd Polaris-Text--regular Polaris-Text--subdued">Apply the same discount, regardless of the bundle's volume or total value.</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="Polaris-FormLayout__Item">
                                        <div>
                                            <label class="Polaris-Choice" for="PolarisRadioButton122"><span class="Polaris-Choice__Control"><span class="Polaris-RadioButton"><input id="PolarisRadioButton122" name="PolarisRadioButton122" type="radio" class="Polaris-RadioButton__Input" aria-describedby="PolarisRadioButton122HelpText" value=""><span class="Polaris-RadioButton__Backdrop"></span></span></span><span class="Polaris-Choice__Label"><span class="Polaris-Text--root Polaris-Text--bodyMd Polaris-Text--regular">Tiered discount</span></span></label>
                                            <div class="Polaris-Choice__Descriptions">
                                                <div class="Polaris-Choice__HelpText" id="PolarisRadioButton122HelpText"><span class="Polaris-Text--root Polaris-Text--bodyMd Polaris-Text--regular Polaris-Text--subdued">The discount will change based on the bundle's volume or total value.</span></div>
                                            </div>
                                        </div>
                                    </div> -->
                                    <div role="group" class="Polaris-FormLayout--grouped">
                                        <div class="Polaris-FormLayout__Items">
                                            <div class="Polaris-FormLayout__Item">
                                                <div class="">
                                                    <div class="Polaris-Labelled__LabelWrapper">
                                                        <div class="Polaris-Label"><label id="PolarisSelect38Label" for="PolarisSelect38" class="Polaris-Label__Text"><span class="Polaris-Text--root Polaris-Text--bodyMd Polaris-Text--regular">Type</span></label></div>
                                                    </div>
                                                    <div class="Polaris-Select">
                                                        <select v-model="bundle.type_off" id="PolarisSelect38" class="Polaris-Select__Input" aria-invalid="false">
                                                            <option value="percentage">Percentage discount</option>
                                                            <option value="fixed">Fixed discount</option>
                                                            <option value="price">Fixed price</option>
                                                        </select>
                                                        <div class="Polaris-Select__Content" aria-hidden="true">
                                                            <span class="Polaris-Select__SelectedOption">Percentage discount</span>
                                                            <span class="Polaris-Select__Icon">
                                                                <span class="Polaris-Icon">
                                                                    <span class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--regular Polaris-Text--visuallyHidden"></span>
                                                                    <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                                                        <path d="M7.676 9h4.648c.563 0 .879-.603.53-1.014l-2.323-2.746a.708.708 0 0 0-1.062 0l-2.324 2.746c-.347.411-.032 1.014.531 1.014Zm4.648 2h-4.648c-.563 0-.878.603-.53 1.014l2.323 2.746c.27.32.792.32 1.062 0l2.323-2.746c.349-.411.033-1.014-.53-1.014Z"></path>
                                                                    </svg>
                                                                </span>
                                                            </span>
                                                        </div>
                                                        <div class="Polaris-Select__Backdrop"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="Polaris-FormLayout__Item">
                                                <div class="">
                                                    <div class="Polaris-Labelled__LabelWrapper">
                                                        <div class="Polaris-Label"><label id="PolarisTextField108Label" for="PolarisTextField108" class="Polaris-Label__Text"><span class="Polaris-Text--root Polaris-Text--bodyMd Polaris-Text--regular">Discount value</span></label></div>
                                                    </div>
                                                    <div class="Polaris-Connected">
                                                        <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                            <div class="Polaris-TextField">
                                                                <input v-model="bundle.discount_value" id="PolarisTextField108" autocomplete="0" class="Polaris-TextField__Input" pattern="[0-9]{0,10}(\.[0-9]{0,2})?" type="number" aria-labelledby="PolarisTextField108Label" aria-invalid="false">
                                                                <div class="Polaris-TextField__Spinner" aria-hidden="true">
                                                                    <div role="button" class="Polaris-TextField__Segment" tabindex="-1">
                                                                        <div class="Polaris-TextField__SpinnerIcon">
                                                                            <span class="Polaris-Icon">
                                                                                <span class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--regular Polaris-Text--visuallyHidden"></span>
                                                                                <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                                                                    <path d="M6.902 12h6.196c.751 0 1.172-.754.708-1.268l-3.098-3.432c-.36-.399-1.055-.399-1.416 0l-3.098 3.433c-.464.513-.043 1.267.708 1.267Z"></path>
                                                                                </svg>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div role="button" class="Polaris-TextField__Segment" tabindex="-1">
                                                                        <div class="Polaris-TextField__SpinnerIcon">
                                                                            <span class="Polaris-Icon">
                                                                                <span class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--regular Polaris-Text--visuallyHidden"></span>
                                                                                <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                                                                    <path d="M13.098 8h-6.196c-.751 0-1.172.754-.708 1.268l3.098 3.432c.36.399 1.055.399 1.416 0l3.098-3.433c.464-.513.043-1.267-.708-1.267Z"></path>
                                                                                </svg>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="Polaris-TextField__Backdrop"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="Polaris-PageActions">
            <div class="Polaris-Stack Polaris-Stack--spacingTight Polaris-Stack--distributionEqualSpacing">
                <div class="Polaris-Stack__Item">
                    <div class="Polaris-ButtonGroup">
                        <div class="Polaris-ButtonGroup__Item"><button class="Polaris-Button" type="button"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Cancel</span></span></button></div>
                    </div>
                </div>
                <div class="Polaris-Stack__Item"><button class="Polaris-Button Polaris-Button--primary" aria-disabled="false" type="button"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Next</span></span></button></div>
            </div>
        </div>
    </div>
</div>

        </div>
    </Tab>

    <Tab :isSelected="selected === 'Design'">
        <div class="Polaris-Tabs__Panel" id="design-content-1" role="tabpanel" aria-labelledby="design-1" tabindex="-1">

            <div class="Polaris-Page Polaris-Page--fullWidth">
    <div class="Polaris-Page__Content">
        <div class="Polaris-Layout">
            <div class="Polaris-Layout__AnnotatedSection">
                <div class="Polaris-Layout__AnnotationWrapper">
                    <div class="Polaris-Layout__Annotation">
                        <div class="Polaris-TextContainer">
                            <h2 class="Polaris-Text--root Polaris-Text--headingMd Polaris-Text--semibold">Imagery</h2>
                            <div class="Polaris-Box" style="--pc-box-color:var(--p-text-subdued);">
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="Polaris-Layout__AnnotationContent">
                        <div class="Polaris-Card">
                            <div class="Polaris-Card__Section">
                                <div class="Polaris-FormLayout">
                                    <div class="Polaris-FormLayout__Item">
                                        <div class="">
                                            <div class="Polaris-Labelled__LabelWrapper">
                                                <div class="Polaris-Label"><label id="PolarisTextField118Label" for="PolarisTextField118" class="Polaris-Label__Text"><span class="Polaris-Text--root Polaris-Text--bodyMd Polaris-Text--regular">Product image</span></label></div>
                                            </div>
                                            <div class="Polaris-Connected">
                                                <div class="Polaris-Connected__Item"><button class="Polaris-Button" type="button"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Upload</span></span></button></div>
                                                <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                    <div class="Polaris-TextField Polaris-TextField--disabled">
                                                        <input id="PolarisTextField118" disabled="" autocomplete="0" class="Polaris-TextField__Input" type="text" aria-describedby="PolarisTextField118HelpText" aria-labelledby="PolarisTextField118Label" aria-invalid="false" value="">
                                                        <div class="Polaris-TextField__Backdrop"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="Polaris-Labelled__HelpText" id="PolarisTextField118HelpText"><span class="Polaris-Text--root Polaris-Text--bodyMd Polaris-Text--regular Polaris-Text--break Polaris-Text--subdued">This will be displayed in the checkout and email notifications.</span></div>
                                        </div>
                                    </div>
                                    <div class="Polaris-FormLayout__Item"></div>
                                    <div class="Polaris-FormLayout__Item">
                                        <div class="">
                                            <div class="Polaris-Labelled__LabelWrapper">
                                                <div class="Polaris-Label"><label id="PolarisTextField119Label" for="PolarisTextField119" class="Polaris-Label__Text"><span class="Polaris-Text--root Polaris-Text--bodyMd Polaris-Text--regular">Header image</span></label></div>
                                            </div>
                                            <div class="Polaris-Connected">
                                                <div class="Polaris-Connected__Item"><button class="Polaris-Button" type="button"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Upload</span></span></button></div>
                                                <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                    <div class="Polaris-TextField Polaris-TextField--disabled">
                                                        <input id="PolarisTextField119" disabled="" autocomplete="0" class="Polaris-TextField__Input" type="text" aria-describedby="PolarisTextField119HelpText" aria-labelledby="PolarisTextField119Label" aria-invalid="false" value="">
                                                        <div class="Polaris-TextField__Backdrop"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="Polaris-Labelled__HelpText" id="PolarisTextField119HelpText"><span class="Polaris-Text--root Polaris-Text--bodyMd Polaris-Text--regular Polaris-Text--break Polaris-Text--subdued">This will be the header image on the bundle page.</span></div>
                                        </div>
                                    </div>
                                    <div class="Polaris-FormLayout__Item"></div>
                                    <div class="Polaris-FormLayout__Item">
                                        <form style="display: none;"><input type="file" id="upload-file" accept="image/*"></form>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="Polaris-Layout__AnnotatedSection">
                <div class="Polaris-Layout__AnnotationWrapper">
                    <div class="Polaris-Layout__Annotation">
                        <div class="Polaris-TextContainer">
                            <h2 class="Polaris-Text--root Polaris-Text--headingMd Polaris-Text--semibold">Additional fields</h2>
                            <div class="Polaris-Box" style="--pc-box-color:var(--p-text-subdued);">
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="Polaris-Layout__AnnotationContent">
                        <div class="Polaris-Card">
                            <div class="Polaris-Card__Section">
                                <div class="Polaris-FormLayout">
                                    <div class="Polaris-FormLayout__Item">
                                        <div>
                                            <label class="Polaris-Choice" for="PolarisCheckbox137">
                                                <span class="Polaris-Choice__Control">
                                                    <span class="Polaris-Checkbox">
                                                        <input v-model="bundle.settings.add_note_field" id="PolarisCheckbox137" type="checkbox" class="Polaris-Checkbox__Input" aria-invalid="false" aria-describedby="PolarisCheckbox137HelpText" role="checkbox" aria-checked="false" value=""><span class="Polaris-Checkbox__Backdrop"></span>
                                                        <span class="Polaris-Checkbox__Icon">
                                                            <span class="Polaris-Icon">
                                                                <span class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--regular Polaris-Text--visuallyHidden"></span>
                                                                <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                                                    <path d="M14.723 6.237a.94.94 0 0 1 .053 1.277l-5.366 6.193a.834.834 0 0 1-.611.293.83.83 0 0 1-.622-.264l-2.927-3.097a.94.94 0 0 1 0-1.278.82.82 0 0 1 1.207 0l2.297 2.43 4.763-5.498a.821.821 0 0 1 1.206-.056Z"></path>
                                                                </svg>
                                                            </span>
                                                        </span>
                                                    </span>
                                                </span>
                                                <span class="Polaris-Choice__Label"><span class="Polaris-Text--root Polaris-Text--bodyMd Polaris-Text--regular">Add a note field</span></span>
                                            </label>
                                            <div class="Polaris-Choice__Descriptions">
                                                <div class="Polaris-Choice__HelpText" id="PolarisCheckbox137HelpText"><span class="Polaris-Text--root Polaris-Text--bodyMd Polaris-Text--regular Polaris-Text--subdued">Add a text field to the bundle summary so your customers can add a note.</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="Polaris-Layout__AnnotatedSection">
                <div class="Polaris-Layout__AnnotationWrapper">
                    <div class="Polaris-Layout__Annotation">
                        <div class="Polaris-TextContainer">
                            <h2 class="Polaris-Text--root Polaris-Text--headingMd Polaris-Text--semibold">Product grid</h2>
                            <div class="Polaris-Box" style="--pc-box-color:var(--p-text-subdued);">
                                <p>Configure how the bundle products will be displayed.</p>
                            </div>
                        </div>
                    </div>
                    <div class="Polaris-Layout__AnnotationContent">
                        <div class="Polaris-Card">
                            <div class="Polaris-Card__Section">
                                <div class="Polaris-FormLayout">
                                    <div class="Polaris-FormLayout__Item">
                                        <div>
                                            <label class="Polaris-Choice" for="product-description-checkbox">
                                                <span class="Polaris-Choice__Control">
                                                    <span class="Polaris-Checkbox">
                                                        <input v-model="bundle.settings.show_bundle_desc" id="product-description-checkbox" type="checkbox" class="Polaris-Checkbox__Input" aria-invalid="false" aria-describedby="product-description-checkboxHelpText" role="checkbox" aria-checked="false"><span class="Polaris-Checkbox__Backdrop"></span>
                                                        <span class="Polaris-Checkbox__Icon">
                                                            <span class="Polaris-Icon">
                                                                <span class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--regular Polaris-Text--visuallyHidden"></span>
                                                                <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                                                    <path d="M14.723 6.237a.94.94 0 0 1 .053 1.277l-5.366 6.193a.834.834 0 0 1-.611.293.83.83 0 0 1-.622-.264l-2.927-3.097a.94.94 0 0 1 0-1.278.82.82 0 0 1 1.207 0l2.297 2.43 4.763-5.498a.821.821 0 0 1 1.206-.056Z"></path>
                                                                </svg>
                                                            </span>
                                                        </span>
                                                    </span>
                                                </span>
                                                <span class="Polaris-Choice__Label"><span class="Polaris-Text--root Polaris-Text--bodyMd Polaris-Text--regular">Display bundle description</span></span>
                                            </label>
                                            <div class="Polaris-Choice__Descriptions">
                                                <div class="Polaris-Choice__HelpText" id="product-description-checkboxHelpText"><span class="Polaris-Text--root Polaris-Text--bodyMd Polaris-Text--regular Polaris-Text--subdued">Display the bundle description below the bundle name.</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="Polaris-FormLayout__Item">
                                        <div>
                                            <label class="Polaris-Choice" for="PolarisCheckbox140">
                                                <span class="Polaris-Choice__Control">
                                                    <span class="Polaris-Checkbox">
                                                        <input v-model="bundle.settings.show_product_desc" id="PolarisCheckbox140" type="checkbox" class="Polaris-Checkbox__Input" aria-invalid="false" aria-describedby="PolarisCheckbox140HelpText" role="checkbox" aria-checked="false" value=""><span class="Polaris-Checkbox__Backdrop"></span>
                                                        <span class="Polaris-Checkbox__Icon">
                                                            <span class="Polaris-Icon">
                                                                <span class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--regular Polaris-Text--visuallyHidden"></span>
                                                                <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                                                    <path d="M14.723 6.237a.94.94 0 0 1 .053 1.277l-5.366 6.193a.834.834 0 0 1-.611.293.83.83 0 0 1-.622-.264l-2.927-3.097a.94.94 0 0 1 0-1.278.82.82 0 0 1 1.207 0l2.297 2.43 4.763-5.498a.821.821 0 0 1 1.206-.056Z"></path>
                                                                </svg>
                                                            </span>
                                                        </span>
                                                    </span>
                                                </span>
                                                <span class="Polaris-Choice__Label"><span class="Polaris-Text--root Polaris-Text--bodyMd Polaris-Text--regular">Display product descriptions</span></span>
                                            </label>
                                            <div class="Polaris-Choice__Descriptions">
                                                <div class="Polaris-Choice__HelpText" id="PolarisCheckbox140HelpText"><span class="Polaris-Text--root Polaris-Text--bodyMd Polaris-Text--regular Polaris-Text--subdued">Display the product description below the product title.</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="Polaris-PageActions">
            <div class="Polaris-Stack Polaris-Stack--spacingTight Polaris-Stack--distributionEqualSpacing">
                <div class="Polaris-Stack__Item">
                    <div class="Polaris-ButtonGroup">
                        <div class="Polaris-ButtonGroup__Item"><button class="Polaris-Button" type="button"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Cancel</span></span></button></div>
                    </div>
                </div>
                <div class="Polaris-Stack__Item"><button v-on:click="saveBundle" class="Polaris-Button Polaris-Button--primary" aria-disabled="false" type="button"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Save</span></span></button></div>
            </div>
        </div>
    </div>
</div>

        </div>
    </Tab>

</TabNav>

</div>
</div>
</div>
</template>

<script>
import TabNav from './TabNav.vue';
import Tab from './Tab.vue';

export default {
    components: { TabNav, Tab },
    data() {
        return {
            step: 1,
            bundle: {
                bundle_name: '',
                product_name: '',
                bundle_type: 'Multiple sections',
                discount_type: 'Flat discount',
                type_off: 'Percentage discount',
                discount_value: '',
                sections: [],
                settings: {
                    product_image: '',
                    header_image: '',
                    add_note_field: false,
                    show_bundle_desc: false,
                    show_product_desc: false,
                }
            },
            selected: 'Setup',
            isPickerOpen: false,
            showCreateSection: false,
            section: {
                title: '',
                desc: '',
                items: [],
            }
        }
    },
    watch: {
        isPickerOpen(newValue) {
            console.log('qwerty=', newValue);
        }
    },
    computed: {
        computedMethod: function () {
            return this.selected.toUpperCase();
        }
    },
    methods: {
        next() {
            this.step++;
        },
        setSelected(tab) {
          this.selected = tab;
        },
        openProductPicker() {
            this.isPickerOpen = true;
            productPicker.dispatch(ResourcePicker.Action.OPEN);
        },
        removeItem(i) {
            let items = this.section.items;
            items.splice(i, 1);
            this.section.items = items;
        },
        addNewSection() {
            this.section = {
                title: '',
                desc: '',
                items: [],
            };
            this.showCreateSection = !this.showCreateSection;
        },
        saveSection() {
            this.section.items = window.products;
            this.bundle.sections.push(this.section);
            this.section = {
                title: '',
                desc: '',
                items: [],
            };
            this.showCreateSection = false;
        },
        editSection(sec) {
            this.section = {
                title: sec.title,
                desc: sec.desc,
                items: sec.items,
            }
            this.showCreateSection = true;
        },
        removeSection(i) {
            let sections = this.sections;
            sections.splice(i, 1);
            this.sections = sections;
        },
        saveBundle() {
            axios.post('/api/bundle', this.bundle).then(response => {
                // this.orders = response.data.orders;
                this.$router.push({name: 'home'});
            });
        }
    }
}
</script>

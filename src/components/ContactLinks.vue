<template>
  <p class="mt-4 text-lg text-gray-500 sm:mt-3 leading-10">
    You can send me an email at
    <a class="link" href="mailto:rtb@hey.com">rtb@hey.com</a>, a message on
    <ContactLink :link="links.linkedinMe" /> or visit my
    <ContactLink :link="links.github" />. You check out my
    <ContactLink :link="links.grin" /> on
    <ContactLink :link="links.linkedinGrin" />,
    <ContactLink :link="links.glassdoor" />, <ContactLink :link="links.g2" />,
    or <ContactLink :link="links.crunchbase" />,
  </p>
</template>
<script setup lang="ts">
import ContactLink from "./ContactLink.vue";
const links = {
  linkedinMe: {
    url: "https://www.linkedin.com/in/ryan-t-brown/",
    label: "LinkedIn",
  },
  grin: {
    url: "https://grin.co",
    label: "company",
  },
  linkedinGrin: {
    url: "https://www.linkedin.com/company/grin-inc-",
    label: "LinkedIn",
  },
  github: {
    url: "https://www.github.com/ryantbrown",
    label: "GitHub",
  },
  glassdoor: {
    url: "https://www.glassdoor.com/Overview/Working-at-GRIN-EI_IE2045076.11,15.htm/",
    label: "Glassdoor",
  },
  g2: {
    url: "https://www.g2.com/products/grin/reviews/",
    label: "G2",
  },
  crunchbase: {
    url: "https://www.crunchbase.com/organization/grin-inc",
    label: "Crunchbase",
  },
};
</script>

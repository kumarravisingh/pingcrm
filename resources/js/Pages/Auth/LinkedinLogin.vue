<template>
  <Head title="Login" />
  <div class="flex items-center justify-center p-6 min-h-screen bg-indigo-800">
    <div class="w-full max-w-md">
      <logo class="block mx-auto w-full max-w-xs fill-white" height="50" />
      <form class="mt-8 bg-white rounded-lg shadow-xl overflow-hidden" @submit.prevent="login">
        <div class="px-10 py-12">
          <h1 class="text-center text-3xl font-bold">Welcome!</h1>
          <div class="mt-6 mx-auto w-24 border-b-2" />
          <div class="sig mx-auto" @click="login">
            <div class='ico-wrapper'>
              <svg class="ico" width="40px" height="40px" viewBox="0 0 40 40" version="1.1">
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                  <g id="LinkedIn" sketch:type="MSArtboardGroup" fill="#FFFFFF">
                    <g id="Fill-6-+-Fill-7" sketch:type="MSLayerGroup" transform="translate(6.000000, 5.000000)">
                      <path d="M3.44222222,0 C5.34,0 6.88,1.54111111 6.88,3.44 C6.88,5.34 5.34,6.88111111 3.44222222,6.88111111 C1.53666667,6.88111111 0,5.34 0,3.44 C0,1.54111111 1.53666667,0 3.44222222,0 L3.44222222,0 Z M0.471111111,9.48888889 L6.41,9.48888889 L6.41,28.5777778 L0.471111111,28.5777778 L0.471111111,9.48888889 Z"
                            id="Fill-6" sketch:type="MSShapeGroup"></path>
                      <path d="M10,9.47333333 L15.6866667,9.47333333 L15.6866667,12.0833333 L15.7688889,12.0833333 C16.56,10.5822222 18.4955556,9 21.3811111,9 C27.3888889,9 28.4988889,12.9522222 28.4988889,18.0933333 L28.4988889,28.5622222 L22.5666667,28.5622222 L22.5666667,19.2788889 C22.5666667,17.0655556 22.5288889,14.2177778 19.4844444,14.2177778 C16.3966667,14.2177778 15.9255556,16.63 15.9255556,19.1211111 L15.9255556,28.5622222 L10,28.5622222 L10,9.47333333"
                            id="Fill-7" sketch:type="MSShapeGroup"></path>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            Sign in with LinkedIn
          </div>
        </div>
      </form>
    </div>
  </div>
</template>

<script>
import { Head } from '@inertiajs/inertia-vue3'
import Logo from '@/Shared/Logo'
import TextInput from '@/Shared/TextInput'
import LoadingButton from '@/Shared/LoadingButton'

export default {
  components: {
    Head,
    Logo,
  },
  data() {
    return {}
  },
  methods: {
    login() {
      window.location.assign(this.$attrs.linkedInURL);
      return true;
    },
  },
}
</script>

<style>
@import url(https://fonts.googleapis.com/css?family=Roboto:400,500);
.sig {
  position: relative;
  box-sizing: border-box;
  height: 40px;
  width: 240px;
  background-color: #0B78B7;
  font: 500 14px/40px Roboto;
  letter-spacing: 0.65px;
  color: white;
  padding-left: 58px;
  border-radius: 2px;
  box-shadow: 0 0 1px 0 rgba(0, 0, 0, .12);
  box-shadow: 0 1px 4px 0 rgba(0, 0, 0, .24);
  overflow: hidden;
  cursor: pointer;
}

.sig:hover {
  background-color: #0469A0;
  box-shadow: 0 2px 0 rgba(0, 0, 0, .12);
  box-shadow: 0 2px 6px 0 rgba(0, 0, 0, .24);
}

.sig:active {
  background-color: #066093;
}

.ico-wrapper {
  position: absolute;
  top: -2px;
  left: -6px;
  width: 48px;
  height: 44px;
  background-color: #0B78B7;
  border: 2px solid #085B8C;
  border-radius: 5px;
  box-sizing: border-box;
}

.ico {
  width: 40px;
  height: 40px;
  display: inline-block;
  vertical-align: middle;
  margin-left: 4px;
}
</style>

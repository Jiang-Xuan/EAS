<svg class="sad" width="44px" height="44px" viewbox="0 0 44 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
		<style>
			svg.sad {
				width: 5vw;
				height: 5vw;
			}
			svg.sad .face {
				-webkit-animation: leftToRight 0.4s linear infinite alternate-reverse;
				animation: leftToRight 0.4s linear infinite alternate-reverse;
			}

			svg.sad .left-eye, svg.sad .right-eye {
				opacity: 1;
				-webkit-transform-origin: 0 1px;
				transform-origin: 0 1px;
				-webkit-animation: blink 3s linear infinite, blinkSqueeze 3s linear infinite;
				animation: blink 3s linear infinite, blinkSqueeze 3s linear infinite;
			}


			@keyframes leftToRight {
				0% {
				    -webkit-transform: translate(-1px, 4px);
				    transform: translate(-1px, 4px);
				}
				100% {
				    -webkit-transform: translate(1px, 4px);
				    transform: translate(1px, 4px);
				}
			}
			@keyframes blink {
				0% {
				    opacity: 1;
				}
				45% {
				    opacity: 1;
				}
				50% {
				    opacity: 0;
				}
				55% {
				    opacity: 1;
				}
				100% {
				    opacity: 1;
				}
			}
			@keyframes blinkSqueeze {
				0% {
				    -webkit-transform: scale(1, 1);
				    transform: scale(1, 1);
				}
				45% {
				    -webkit-transform: scale(1, 1);
				    transform: scale(1, 1);
				}
				50% {
				    -webkit-transform: scale(1, 0);
				    transform: scale(1, 0);
				}
				55% {
				    -webkit-transform: scale(1, 1);
				    transform: scale(1, 1);
				}
				100% {
				    -webkit-transform: scale(1, 1);
				    transform: scale(1, 1);
				}
			}
		</style>
		<g id="sad" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(0, 0)">
			<circle id="body" r="22" cx="22" cy="22" fill="#e23d18" stroke="" stroke-width=""/>
			<g id="face" transform="translate(13, 20)">
				<g class="face">
					<path d="M7,4 C7,5.1045695 7.8954305,6 9,6 C10.1045695,6 11,5.1045695 11,4" class="mouth" stroke="#2C0E0F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" transform="translate(9.000000, 5.000000) rotate(-180.000000) translate(-9.000000, -5.000000) "></path>
					<ellipse class="right-eye" fill="#2C0E0F" cx="16.0941176" cy="1.75609756" rx="1.90588235" ry="1.75609756"></ellipse>
					<ellipse class="left-eye" fill="#2C0E0F" cx="1.90588235" cy="1.75609756" rx="1.90588235" ry="1.75609756"></ellipse>
				</g>
				
			</g>
		</g>
	</svg>
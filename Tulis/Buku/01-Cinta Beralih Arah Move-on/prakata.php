<style>
#index a::after {
	content: leader('.') "p. " target-counter(attr(href), page);
}

@page {

size: A4 portrait;
margin: 1.5cm 2cm 3cm 2cm;

	/* Garisan footer */
	@bottom-left {

		border-top: 2px solid #555;
		padding-top: 6px;

		content: "Nuxt Tips Collection";

		font-size: 11px;
		font-weight: bold;
		text-transform: uppercase;
	}

	/* Nombor halaman */
	@bottom-right {

		border-top: 2px solid #555;
		padding-top: 6px;

		content: "[ " counter(page) " ]";

		font-size: 11px;
		font-weight: bold;
		text-align: right;
	}
}
</style>

<ul id="index">
  <li><a href="#chapter1">Chapter 1</a></li>
  <li><a href="#chapter2">Chapter 2</a></li>
</ul>
CSS


<h1>Foreword</h1>

<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Turpis cursus in hac habitasse platea dictumst quisque sagittis purus. Ante in nibh mauris cursus mattis molestie. Vel risus commodo viverra maecenas. Tellus rutrum tellus pellentesque eu. Duis ultricies lacus sed turpis tincidunt id aliquet risus. Malesuada fames ac turpis egestas integer eget aliquet. Amet dictum sit amet justo donec enim diam vulputate ut. Sem viverra aliquet eget sit. Blandit turpis cursus in hac habitasse platea dictumst quisque sagittis. Ac ut consequat semper viverra. Vestibulum rhoncus est pellentesque elit ullamcorper dignissim cras tincidunt. Congue quisque egestas diam in arcu cursus euismod. Eget mauris pharetra et ultrices neque ornare aenean. Lectus arcu bibendum at varius vel pharetra vel turpis. Consequat mauris nunc congue nisi vitae suscipit.</p>

<p>A iaculis at erat pellentesque adipiscing. Diam maecenas ultricies mi eget. Sagittis eu volutpat odio facilisis mauris sit. In tellus integer feugiat scelerisque varius morbi enim nunc. Ante in nibh mauris cursus mattis. Sociis natoque penatibus et magnis dis parturient montes nascetur. Quis varius quam quisque id diam vel. Tellus orci ac auctor augue mauris augue neque gravida. Eget est lorem ipsum dolor. Viverra maecenas accumsan lacus vel facilisis. Suspendisse ultrices gravida dictum fusce ut placerat orci nulla. Venenatis a condimentum vitae sapien pellentesque habitant. Ut tortor pretium viverra suspendisse potenti nullam ac. Ultrices gravida dictum fusce ut placerat orci nulla pellentesque. Vitae elementum curabitur vitae nunc sed. Elementum facilisis leo vel fringilla est ullamcorper eget nulla.</p>

<p>Ac orci phasellus egestas tellus rutrum tellus pellentesque. Congue quisque egestas diam in arcu cursus. Magna sit amet purus gravida quis blandit turpis cursus in. Nunc lobortis mattis aliquam faucibus purus in. Massa sed elementum tempus egestas. Auctor elit sed vulputate mi sit amet mauris commodo. Non blandit massa enim nec dui nunc mattis enim ut. Lobortis elementum nibh tellus molestie. Suspendisse in est ante in nibh. Aliquam eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis. Tellus integer feugiat scelerisque varius morbi. Sollicitudin nibh sit amet commodo nulla. Lectus magna fringilla urna porttitor rhoncus dolor purus. Rhoncus est pellentesque elit ullamcorper dignissim. Sed felis eget velit aliquet sagittis id consectetur purus ut. Etiam non quam lacus suspendisse. Lacus vestibulum sed arcu non odio euismod.</p>

<h1>Preface</h1>

<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Turpis cursus in hac habitasse platea dictumst quisque sagittis purus. Ante in nibh mauris cursus mattis molestie. Vel risus commodo viverra maecenas. Tellus rutrum tellus pellentesque eu. Duis ultricies lacus sed turpis tincidunt id aliquet risus. Malesuada fames ac turpis egestas integer eget aliquet. Amet dictum sit amet justo donec enim diam vulputate ut. Sem viverra aliquet eget sit. Blandit turpis cursus in hac habitasse platea dictumst quisque sagittis. Ac ut consequat semper viverra. Vestibulum rhoncus est pellentesque elit ullamcorper dignissim cras tincidunt. Congue quisque egestas diam in arcu cursus euismod. Eget mauris pharetra et ultrices neque ornare aenean. Lectus arcu bibendum at varius vel pharetra vel turpis. Consequat mauris nunc congue nisi vitae suscipit.</p>

<p>A iaculis at erat pellentesque adipiscing. Diam maecenas ultricies mi eget. Sagittis eu volutpat odio facilisis mauris sit. In tellus integer feugiat scelerisque varius morbi enim nunc. Ante in nibh mauris cursus mattis. Sociis natoque penatibus et magnis dis parturient montes nascetur. Quis varius quam quisque id diam vel. Tellus orci ac auctor augue mauris augue neque gravida. Eget est lorem ipsum dolor. Viverra maecenas accumsan lacus vel facilisis. Suspendisse ultrices gravida dictum fusce ut placerat orci nulla. Venenatis a condimentum vitae sapien pellentesque habitant. Ut tortor pretium viverra suspendisse potenti nullam ac. Ultrices gravida dictum fusce ut placerat orci nulla pellentesque. Vitae elementum curabitur vitae nunc sed. Elementum facilisis leo vel fringilla est ullamcorper eget nulla.</p>

<p>Ac orci phasellus egestas tellus rutrum tellus pellentesque. Congue quisque egestas diam in arcu cursus. Magna sit amet purus gravida quis blandit turpis cursus in. Nunc lobortis mattis aliquam faucibus purus in. Massa sed elementum tempus egestas. Auctor elit sed vulputate mi sit amet mauris commodo. Non blandit massa enim nec dui nunc mattis enim ut. Lobortis elementum nibh tellus molestie. Suspendisse in est ante in nibh. Aliquam eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis. Tellus integer feugiat scelerisque varius morbi. Sollicitudin nibh sit amet commodo nulla. Lectus magna fringilla urna porttitor rhoncus dolor purus. Rhoncus est pellentesque elit ullamcorper dignissim. Sed felis eget velit aliquet sagittis id consectetur purus ut. Etiam non quam lacus suspendisse. Lacus vestibulum sed arcu non odio euismod.</p>
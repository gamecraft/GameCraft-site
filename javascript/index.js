var MYBLOG_LIMIT = 4;
var MYWRAPPER_CLASS = 'homeblog';

var WP = {
	open : function(b) {
		var a = {
			posts : function() {
				var d = MYBLOG_LIMIT;
				var e = 0;
				var c = {
					all : function(g) {
						var f = b + "/api/get_recent_posts/";
						f += "?count=" + d + "&page=" + e + "&callback=?";
						jQuery.getJSON(f, function(l) {
							var k = l.posts;
							for(var j = 0; j < k.length; j++) {
								var h = k[j];
								h.createComment = function(i, m) {
									i.postId = h.id;
									a.comments().create(i, m)
								}
							}
							g(k)
						})
					},
					findBySlug : function(f, h) {
						var g = b + "/api/get_post/";
						g += "?slug=" + f + "&callback=?";
						jQuery.getJSON(g, function(i) {
							h(i.post)
						})
					},
					limit : function(f) {
						d = f;
						return c
					},
					page : function(f) {
						e = f;
						return c
					}
				};
				return c
			},
			pages : function() {
				var c = {
					findBySlug : function(d, f) {
						var e = b + "/api/get_page/";
						e += "?slug=" + d + "&callback=?";
						jQuery.getJSON(e, function(g) {
							f(g.page)
						})
					}
				};
				return c
			},
			categories : function() {
				var c = {
					all : function(e) {
						var d = b + "/api/get_category_index/";
						d += "?callback=?";
						jQuery.getJSON(d, function(f) {
							e(f.categories)
						})
					}
				};
				return c
			},
			tags : function() {
				var c = {
					all : function(e) {
						var d = b + "/api/get_tag_index/";
						d += "?callback=?";
						jQuery.getJSON(d, function(f) {
							e(f.tags)
						})
					}
				};
				return c
			},
			comments : function() {
				var c = {
					create : function(f, e) {
						var d = b + "/api/submit_comment/";
						d += "?post_id=" + f.postId + "&name=" + f.name + "&email=" + f.email + "&content=" + f.content + "&callback=?";
						jQuery.getJSON(d, function(g) {
							e(g)
						})
					}
				};
				return c
			}
		};
		return a
	}
};

var blog = WP.open('http://game-craft.com/blog/');
blog.posts().all(function(posts) {
	jQuery('.' + MYWRAPPER_CLASS).empty();
	for(var i = 0; i < posts.length; i++) {
		jQuery('.' + MYWRAPPER_CLASS).append(function() {
			return '<a href="' + posts[i].url + '"><h4>' + posts[i].title + '</h4></a>';

		});
	}
});

$(document).ready(function() {
	$('img.our_projects_button').hover(function() {
		$(this).attr("src", "assets/projects-button-hover.png");
	}, function() {
		$(this).attr("src", "assets/projects-button.png");
	});
});

/*
	krpano - super simple html5 text input plugin
*/

var krpanoplugin = function()
{
	var local = this;

	var krpano = null;
	var plugin = null;

	var inputelement = null;

	local.registerplugin = function(krpanointerface, pluginpath, pluginobject)
	{
		krpano = krpanointerface;
		plugin = pluginobject;

		inputelement = document.createElement("input");
		inputelement.type = "text";
		inputelement.style.width  = "100%";
		inputelement.style.height = "100%";
		inputelement.style.backgroundColor = "#e5e9ec";
		inputelement.style.paddingLeft = '10px';
		inputelement.style.border = 0;

		plugin.registerattribute("text", "", text_set, text_get);
    plugin.registerattribute("textval", inputelement.value);
		plugin.registerattribute("onchanged", null);

		inputelement.addEventListener("change", text_changed, true);
		inputelement.addEventListener("mousedown", function(e){ e.stopPropagation(); }, true);

		plugin.sprite.appendChild(inputelement);
	}

	local.unloadplugin = function()
	{
		plugin = null;
		krpano = null;
	}

	function text_set(newtext)
	{
    //alert(newtext);
    if(newtext != null) {
      inputelement.value = unconvert(newtext);
    }
	}

	function text_get()
	{
    return convert(inputelement.value);
	}

	function text_changed()
	{
    krpano.call(plugin.onchanged, plugin);
	}

  function convert(str)
  {
    str = str.replace(/&/g, "&amp;");
    str = str.replace(/>/g, "&#62;");
    str = str.replace(/</g, "&#60;");
    str = str.replace(/"/g, "ʺ");
    str = str.replace(/'/g, "&#039;");
    str = str.replace(/,/g, "&#44;");
    return str;
  }

  function unconvert(str)
  {
    str = str.replace(/&amp;/g, "&");
    str = str.replace(/&#62;/g, ">");
    str = str.replace(/&#60;/g, "<");
    // str = str.replace(/"/g, "ʺ");
    str = str.replace(/&#039;/g, "'");
    str = str.replace(/&#44;/g, ",");
    return str;
  }



};

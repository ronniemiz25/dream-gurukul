jQuery(document).ready(function($) {
            function getParameterByName(name) {
                name = name.replace(/[\[]/, "\[").replace(/[\]]/, "\]");
                var regex = new RegExp("[\?&]" + name + "=([^&#]*)"),
                    results = regex.exec(location.search);
                return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
            }

            var utm_form_name = getParameterByName('utm_form_name');
            var utm_source = getParameterByName('utm_source');
            var utm_medium = getParameterByName('utm_medium');
            var utm_content = getParameterByName('utm_content');
            var utm_campaign = getParameterByName('utm_campaign');
            var utm_term = getParameterByName('utm_term');
            var network = getParameterByName('network');
            var campaign_id = getParameterByName('campaign_id');
            var adgroup_id = getParameterByName('adgroup_id');
            var gclid = getParameterByName('gclid');
            var device = getParameterByName('device');
            var creative = getParameterByName('creative');
            var placement = getParameterByName('placement');
            var extension_id = getParameterByName('extension_id');
            var target_id = getParameterByName('target_id');
            var loc_interest_ms = getParameterByName('loc_interest_ms');
            var loc_physical_ms = getParameterByName('loc_physical_ms');
            var device_model = getParameterByName('device_model');
            var keyword = getParameterByName('keyword');
            var match_type = getParameterByName('match_type');
            var adposition = getParameterByName('adposition');
            var source_id = getParameterByName('source_id');
            var target = getParameterByName('target');
            var mobile = getParameterByName('cellno');

            document.getElementById("utm_source").value = utm_source.toString();
            document.getElementById("utm_medium").value = utm_medium.toString();
            document.getElementById("utm_content").value = utm_content.toString();
            document.getElementById("utm_campaign").value = utm_campaign.toString();
            document.getElementById("utm_term").value = utm_term.toString();
            document.getElementById("network").value = network.toString();
            document.getElementById("campaign_id").value = campaign_id.toString();
            document.getElementById("adgroup_id").value = adgroup_id.toString();
            document.getElementById("gclid").value = gclid.toString();
            document.getElementById("device").value = device.toString();
            document.getElementById("creative").value = creative.toString();
            document.getElementById("placement").value = placement.toString();
            document.getElementById("extension_id").value = extension_id.toString();
            document.getElementById("target_id").value = target_id.toString();
            document.getElementById("loc_interest_ms").value = loc_interest_ms.toString();
            document.getElementById("loc_physical_ms").value = loc_physical_ms.toString();
            document.getElementById("device_model").value = device_model.toString();
            document.getElementById("keyword").value = keyword.toString();
            document.getElementById("match_type").value = match_type.toString();
            document.getElementById("adposition").value = adposition.toString();
            document.getElementById("source_id").value = source_id.toString();
            document.getElementById("target").value = target.toString();
            if (utm_source == "google") {
                document.getElementById('whatsapp_icon').setAttribute('href', "https://wa.me/919330290724/?text=I want to know more about Dream Gurukul Madhyamgram");
            }
        });
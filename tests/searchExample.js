module.exports = {
    "Search engine example" : function(browser) {
        browser
            .url("http://bing.com")
            .waitForElementVisible("input[name=q]", 1000)
            .pause(2000)
            .setValue("input[name=q]", "Hello world!")
            .click("input[type=submit]")
            .waitForElementVisible("span.sb_count", 1000)
            .pause(2000)
            .getText("span.sb_count", function(result){
                console.log(result.value);
            })
            .end();
    }
};
---
title: Divoom API playtime
date: 2024-09-11 20:41:35
slug: divoom-api-playtime
taxonomies:
  tags:
    - divoom
    - gadgets
    - bluetooth
---
I have a Divoom Timebox Evo - it is 16x16 (10cm x 10cm) LED display which also doubles as a portable bluetooth speaker. It's a lovely device with decent sound and bright LEDs. By default it will show you animations that people have posted online using the Divoom app, or you can draw your own, as well as displaying the weather, time and more.

![Divoom Timebox Evo animation from gadgetmatch.com](/blog/2024/09/divoom-animated.gif)

What would be really nice though is to control it programmatically.

All comms with the Timebox is done over Bluetooth (no wifi unlike its bigger 64x64 cousin the Pixoo) and so things are a little more annoying than they might otherwise be. Divoom [publish the details of the Bluetooth protocol they use](https://docin.divoom-gz.com/web/#/5/146) as well as [the HTTP-based API](https://docin.divoom-gz.com/web/#/5/24) for interacting with the wifi-enabled devices, and some people have [published guides to using the Bluetooth protocol](https://github.com/RomRider/node-divoom-timebox-evo/blob/master/PROTOCOL.md).

There are quite a lot of client libraries for interacting with Divoom devices, but most are targeted at the wifi-enabled ones, which leaves us with only three (that I could find) for the Timebox:

### 1. Windows Divoom Client: [https://github.com/iebb/Diwoom](https://github.com/iebb/Diwoom)

The Windows client looked like this when I loaded it up, and no editing I did in Visual Studio could get it to render correctly:

![Windows Divoom Client screenshot](/blog/2024/09/divoom-windows-client-screenshot.png)

### 2. .net library: [https://github.com/panoramicdata/Divoom.Api](https://github.com/panoramicdata/Divoom.Api)

I gave up on this after half an hour of effort when I found it references[ a library which is not only not in nupkg but is marked as "Legacy"](https://github.com/inthehand/32feet/tree/main/Legacy/InTheHand.Net.Personal) by the authors and is not provided in binary form, so I'd have to go and build it from source myself, having already been through several project configuration issues in Visual Studio getting this library to bundle correctly. No thanks!

### 3. A Node library: [https://github.com/RomRider/node-divoom-timebox-evo/tree/master](https://github.com/RomRider/node-divoom-timebox-evo/tree/master)

This worked! The github repo doesn't have examples which quite work straight away but here's some code that helped me.

List all the bluetooth devices connected to your device:

```js
var btSerial = new (require("bluetooth-serial-port").BluetoothSerialPort)();

btSerial.on("found", function (address, name) {
    console.log("found: " + address + " with name " + name);
});

btSerial.inquire();
```

Send some text (it will automatically scroll if it's too long):

```js
var btSerial = new (require('bluetooth-serial-port')).BluetoothSerialPort();

const TIMEBOX_ADDRESS = "put your address from above here";

btSerial.findSerialPortChannel(TIMEBOX_ADDRESS, function (channel) {
    btSerial.connect(TIMEBOX_ADDRESS, channel, function () {
        console.log('connected');

        var Divoom = require('node-divoom-timebox-evo');

        var d = (new Divoom.TimeboxEvo()).createRequest('text', { text: "(¬_¬)" });
        d.paletteFn = d.PALETTE_BLACK_ON_CMY_RAINBOW; // Baked in color palette, but you can define your own
        d.animFn = d.ANIM_UNI_GRADIANT_BACKGROUND; // Baked in animation, but you can define your own

        d.messages.asBinaryBuffer().forEach(elt => {
            btSerial.write(elt,
                function (err, bytesWritten) {
                    if (err) console.log(err);
                }
            );
        })

        btSerial.on('data', function (buffer) {
            console.log(buffer.toString('ascii'));
        });
    }, function () {
        console.log('cannot connect');
    });
}, function () {
    console.log('found nothing');
});
```

Send a gif:

```js
var btSerial = new (require('bluetooth-serial-port')).BluetoothSerialPort();
var Divoom = require('node-divoom-timebox-evo');

const TIMEBOX_ADDRESS = "put your address from above here";

btSerial.findSerialPortChannel(TIMEBOX_ADDRESS, function(channel) {
  btSerial.connect(TIMEBOX_ADDRESS, channel, function() {
    console.log('connected');
    var d = (new Divoom.TimeboxEvo()).createRequest('animation');

    // dino.gif is the name of a file in the same directory as this code
    // you can download this: https://github.com/RomRider/node-divoom-timebox-evo/blob/master/test/inputs/dino.gif
    d.read('dino.gif').then(result => {
      result.asBinaryBuffer().forEach(elt => {
        btSerial.write(elt,
          function(err, bytesWritten) {
            if (err) console.log(err);
          }
        );
      })
    }).catch(err => {
      throw err;
    });

    btSerial.on('data', function(buffer) {
      console.log(buffer.toString('ascii'));
    });
  }, function () {
    console.log('cannot connect');
  });
}, function() {
  console.log('found nothing');
});
```

OK, that's it for now, but this is great progress! Now I can run this on-demand from any device which can run code and has a bluetooth connection to update on e.g. a broken build, or [report how many people are in space right now](https://philwilson.org/blog/2024/03/reanimating-a-little-printer-project/) (right now it's 19! wow!)
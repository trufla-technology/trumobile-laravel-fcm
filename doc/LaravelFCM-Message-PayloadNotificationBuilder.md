TruMobileLaravelFCM\Message\PayloadNotificationBuilder
===============

Class PayloadNotificationBuilder

Official google documentation :


* Class name: PayloadNotificationBuilder
* Namespace: TruMobileLaravelFCM\Message







Methods
-------


### __construct

    mixed TruMobileLaravelFCM\Message\PayloadNotificationBuilder::__construct(String $title)

Title must be present on android notification and ios (watch) notification



* Visibility: **public**


#### Arguments
* $title **String**



### setTitle

    \TruMobileLaravelFCM\Message\PayloadNotificationBuilder TruMobileLaravelFCM\Message\PayloadNotificationBuilder::setTitle(String $title)

Indicates notification title. This field is not visible on iOS phones and tablets.

but it is required for android

* Visibility: **public**


#### Arguments
* $title **String**



### setBody

    \TruMobileLaravelFCM\Message\PayloadNotificationBuilder TruMobileLaravelFCM\Message\PayloadNotificationBuilder::setBody(String $body)

Indicates notification body text.



* Visibility: **public**


#### Arguments
* $body **String**



### setIcon

    \TruMobileLaravelFCM\Message\PayloadNotificationBuilder TruMobileLaravelFCM\Message\PayloadNotificationBuilder::setIcon(String $icon)

Supported Android
Indicates notification icon. example : Sets value to myicon for drawable resource myicon.



* Visibility: **public**


#### Arguments
* $icon **String**



### setSound

    \TruMobileLaravelFCM\Message\PayloadNotificationBuilder TruMobileLaravelFCM\Message\PayloadNotificationBuilder::setSound(String $sound)

Indicates a sound to play when the device receives a notification.

Supports default or the filename of a sound resource bundled in the app.

* Visibility: **public**


#### Arguments
* $sound **String**



### setBadge

    \TruMobileLaravelFCM\Message\PayloadNotificationBuilder TruMobileLaravelFCM\Message\PayloadNotificationBuilder::setBadge(String $badge)

Supported Ios

Indicates the badge on the client app home icon.

* Visibility: **public**


#### Arguments
* $badge **String**



### setTag

    \TruMobileLaravelFCM\Message\PayloadNotificationBuilder TruMobileLaravelFCM\Message\PayloadNotificationBuilder::setTag(String $tag)

Supported Android

Indicates whether each notification results in a new entry in the notification drawer on Android.
If not set, each request creates a new notification.
If set, and a notification with the same tag is already being shown, the new notification replaces the existing one in the notification drawer.

* Visibility: **public**


#### Arguments
* $tag **String**



### setColor

    \TruMobileLaravelFCM\Message\PayloadNotificationBuilder TruMobileLaravelFCM\Message\PayloadNotificationBuilder::setColor(String $color)

Supported Android

Indicates color of the icon, expressed in #rrggbb format

* Visibility: **public**


#### Arguments
* $color **String**



### setClickAction

    \TruMobileLaravelFCM\Message\PayloadNotificationBuilder TruMobileLaravelFCM\Message\PayloadNotificationBuilder::setClickAction(String $action)

Indicates the action associated with a user click on the notification



* Visibility: **public**


#### Arguments
* $action **String**



### setTitleLocationKey

    \TruMobileLaravelFCM\Message\PayloadNotificationBuilder TruMobileLaravelFCM\Message\PayloadNotificationBuilder::setTitleLocationKey(String $titleKey)

Indicates the key to the title string for localization.



* Visibility: **public**


#### Arguments
* $titleKey **String**



### setTitleLocationArgs

    \TruMobileLaravelFCM\Message\PayloadNotificationBuilder TruMobileLaravelFCM\Message\PayloadNotificationBuilder::setTitleLocationArgs(mixed $titleArgs)

Indicates the string value to replace format specifiers in the title string for localization.



* Visibility: **public**


#### Arguments
* $titleArgs **mixed**



### setBodyLocationKey

    \TruMobileLaravelFCM\Message\PayloadNotificationBuilder TruMobileLaravelFCM\Message\PayloadNotificationBuilder::setBodyLocationKey(String $bodyKey)

Indicates the key to the body string for localization.



* Visibility: **public**


#### Arguments
* $bodyKey **String**



### setBodyLocationArgs

    \TruMobileLaravelFCM\Message\PayloadNotificationBuilder TruMobileLaravelFCM\Message\PayloadNotificationBuilder::setBodyLocationArgs(mixed $bodyArgs)

Indicates the string value to replace format specifiers in the body string for localization.



* Visibility: **public**


#### Arguments
* $bodyArgs **mixed**



### getTitle

    null|String TruMobileLaravelFCM\Message\PayloadNotificationBuilder::getTitle()

Get title



* Visibility: **public**




### getBody

    null|String TruMobileLaravelFCM\Message\PayloadNotificationBuilder::getBody()

Get body



* Visibility: **public**




### getIcon

    null|String TruMobileLaravelFCM\Message\PayloadNotificationBuilder::getIcon()

Get Icon



* Visibility: **public**




### getSound

    null|String TruMobileLaravelFCM\Message\PayloadNotificationBuilder::getSound()

Get Sound



* Visibility: **public**




### getBadge

    null|String TruMobileLaravelFCM\Message\PayloadNotificationBuilder::getBadge()

Get Badge



* Visibility: **public**




### getTag

    null|String TruMobileLaravelFCM\Message\PayloadNotificationBuilder::getTag()

Get Tag



* Visibility: **public**




### getColor

    null|String TruMobileLaravelFCM\Message\PayloadNotificationBuilder::getColor()

Get Color



* Visibility: **public**




### getClickAction

    null|String TruMobileLaravelFCM\Message\PayloadNotificationBuilder::getClickAction()

Get ClickAction



* Visibility: **public**




### getBodyLocationKey

    null|String TruMobileLaravelFCM\Message\PayloadNotificationBuilder::getBodyLocationKey()

Get BodyLocationKey



* Visibility: **public**




### getBodyLocationArgs

    null|String|array TruMobileLaravelFCM\Message\PayloadNotificationBuilder::getBodyLocationArgs()

Get BodyLocationArgs



* Visibility: **public**




### getTitleLocationKey

    string TruMobileLaravelFCM\Message\PayloadNotificationBuilder::getTitleLocationKey()

Get TitleLocationKey



* Visibility: **public**




### getTitleLocationArgs

    null|String|array TruMobileLaravelFCM\Message\PayloadNotificationBuilder::getTitleLocationArgs()

GetTitleLocationArgs



* Visibility: **public**




### build

    \TruMobileLaravelFCM\Message\PayloadNotification TruMobileLaravelFCM\Message\PayloadNotificationBuilder::build()

Build an PayloadNotification



* Visibility: **public**




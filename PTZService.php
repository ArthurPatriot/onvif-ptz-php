<?php


/**
 * WSDL File for HelloService
 */
class PTZService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'IntRange' => '\\IntRange',
  'Vector2D' => '\\Vector2D',
  'Vector1D' => '\\Vector1D',
  'PTZVector' => '\\PTZVector',
  'PTZStatus' => '\\PTZStatus',
  'PTZMoveStatus' => '\\PTZMoveStatus',
  'Vector' => '\\Vector',
  'Rectangle' => '\\Rectangle',
  'Polygon' => '\\Polygon',
  'Color' => '\\Color',
  'ColorCovariance' => '\\ColorCovariance',
  'ColorDescriptor' => '\\ColorDescriptor',
  'ColorCluster' => '\\ColorCluster',
  'Transformation' => '\\Transformation',
  'TransformationExtension' => '\\TransformationExtension',
  'GeoLocation' => '\\GeoLocation',
  'GeoOrientation' => '\\GeoOrientation',
  'LocalLocation' => '\\LocalLocation',
  'LocalOrientation' => '\\LocalOrientation',
  'LocationEntity' => '\\LocationEntity',
  'base64Binary' => '\\base64Binary',
  'hexBinary' => '\\hexBinary',
  'Envelope' => '\\Envelope',
  'Header' => '\\Header',
  'Body' => '\\Body',
  'Fault' => '\\Fault',
  'faultreason' => '\\faultreason',
  'reasontext' => '\\reasontext',
  'faultcode' => '\\faultcode',
  'subcode' => '\\subcode',
  'detail' => '\\detail',
  'NotUnderstoodType' => '\\NotUnderstoodType',
  'SupportedEnvType' => '\\SupportedEnvType',
  'UpgradeType' => '\\UpgradeType',
  'EndpointReferenceType' => '\\EndpointReferenceType',
  'ReferenceParametersType' => '\\ReferenceParametersType',
  'MetadataType' => '\\MetadataType',
  'RelatesToType' => '\\RelatesToType',
  'AttributedURIType' => '\\AttributedURIType',
  'AttributedUnsignedLongType' => '\\AttributedUnsignedLongType',
  'AttributedQNameType' => '\\AttributedQNameType',
  'AttributedAnyType' => '\\AttributedAnyType',
  'ProblemActionType' => '\\ProblemActionType',
  'BaseFaultType' => '\\BaseFaultType',
  'ErrorCode' => '\\ErrorCode',
  'Description' => '\\Description',
  'FaultCause' => '\\FaultCause',
  'Documentation' => '\\Documentation',
  'ExtensibleDocumented' => '\\ExtensibleDocumented',
  'QueryExpressionType' => '\\QueryExpressionType',
  'TopicNamespaceType' => '\\TopicNamespaceType',
  'Topic' => '\\Topic',
  'TopicType' => '\\TopicType',
  'TopicSetType' => '\\TopicSetType',
  'TopicExpressionType' => '\\TopicExpressionType',
  'FilterType' => '\\FilterType',
  'SubscriptionPolicyType' => '\\SubscriptionPolicyType',
  'NotificationProducerRP' => '\\NotificationProducerRP',
  'SubscriptionManagerRP' => '\\SubscriptionManagerRP',
  'NotificationMessageHolderType' => '\\NotificationMessageHolderType',
  'Message' => '\\Message',
  'Notify' => '\\Notify',
  'UseRaw' => '\\UseRaw',
  'Subscribe' => '\\Subscribe',
  'SubscriptionPolicy' => '\\SubscriptionPolicy',
  'SubscribeResponse' => '\\SubscribeResponse',
  'GetCurrentMessage' => '\\GetCurrentMessage',
  'GetCurrentMessageResponse' => '\\GetCurrentMessageResponse',
  'SubscribeCreationFailedFaultType' => '\\SubscribeCreationFailedFaultType',
  'InvalidFilterFaultType' => '\\InvalidFilterFaultType',
  'TopicExpressionDialectUnknownFaultType' => '\\TopicExpressionDialectUnknownFaultType',
  'InvalidTopicExpressionFaultType' => '\\InvalidTopicExpressionFaultType',
  'TopicNotSupportedFaultType' => '\\TopicNotSupportedFaultType',
  'MultipleTopicsSpecifiedFaultType' => '\\MultipleTopicsSpecifiedFaultType',
  'InvalidProducerPropertiesExpressionFaultType' => '\\InvalidProducerPropertiesExpressionFaultType',
  'InvalidMessageContentExpressionFaultType' => '\\InvalidMessageContentExpressionFaultType',
  'UnrecognizedPolicyRequestFaultType' => '\\UnrecognizedPolicyRequestFaultType',
  'UnsupportedPolicyRequestFaultType' => '\\UnsupportedPolicyRequestFaultType',
  'NotifyMessageNotSupportedFaultType' => '\\NotifyMessageNotSupportedFaultType',
  'UnacceptableInitialTerminationTimeFaultType' => '\\UnacceptableInitialTerminationTimeFaultType',
  'NoCurrentMessageOnTopicFaultType' => '\\NoCurrentMessageOnTopicFaultType',
  'GetMessages' => '\\GetMessages',
  'GetMessagesResponse' => '\\GetMessagesResponse',
  'DestroyPullPoint' => '\\DestroyPullPoint',
  'DestroyPullPointResponse' => '\\DestroyPullPointResponse',
  'UnableToGetMessagesFaultType' => '\\UnableToGetMessagesFaultType',
  'UnableToDestroyPullPointFaultType' => '\\UnableToDestroyPullPointFaultType',
  'CreatePullPoint' => '\\CreatePullPoint',
  'CreatePullPointResponse' => '\\CreatePullPointResponse',
  'UnableToCreatePullPointFaultType' => '\\UnableToCreatePullPointFaultType',
  'Renew' => '\\Renew',
  'RenewResponse' => '\\RenewResponse',
  'UnacceptableTerminationTimeFaultType' => '\\UnacceptableTerminationTimeFaultType',
  'Unsubscribe' => '\\Unsubscribe',
  'UnsubscribeResponse' => '\\UnsubscribeResponse',
  'UnableToDestroySubscriptionFaultType' => '\\UnableToDestroySubscriptionFaultType',
  'PauseSubscription' => '\\PauseSubscription',
  'PauseSubscriptionResponse' => '\\PauseSubscriptionResponse',
  'ResumeSubscription' => '\\ResumeSubscription',
  'ResumeSubscriptionResponse' => '\\ResumeSubscriptionResponse',
  'PauseFailedFaultType' => '\\PauseFailedFaultType',
  'ResumeFailedFaultType' => '\\ResumeFailedFaultType',
  'Include' => '\\IncludeCustom',
  'DeviceEntity' => '\\DeviceEntity',
  'IntRectangle' => '\\IntRectangle',
  'IntRectangleRange' => '\\IntRectangleRange',
  'FloatRange' => '\\FloatRange',
  'DurationRange' => '\\DurationRange',
  'IntItems' => '\\IntItems',
  'FloatItems' => '\\FloatItems',
  'StringItems' => '\\StringItems',
  'AnyHolder' => '\\AnyHolder',
  'VideoSource' => '\\VideoSource',
  'VideoSourceExtension' => '\\VideoSourceExtension',
  'VideoSourceExtension2' => '\\VideoSourceExtension2',
  'AudioSource' => '\\AudioSource',
  'Profile' => '\\Profile',
  'ProfileExtension' => '\\ProfileExtension',
  'ProfileExtension2' => '\\ProfileExtension2',
  'ConfigurationEntity' => '\\ConfigurationEntity',
  'VideoSourceConfiguration' => '\\VideoSourceConfiguration',
  'VideoSourceConfigurationExtension' => '\\VideoSourceConfigurationExtension',
  'VideoSourceConfigurationExtension2' => '\\VideoSourceConfigurationExtension2',
  'Rotate' => '\\Rotate',
  'RotateExtension' => '\\RotateExtension',
  'LensProjection' => '\\LensProjection',
  'LensOffset' => '\\LensOffset',
  'LensDescription' => '\\LensDescription',
  'VideoSourceConfigurationOptions' => '\\VideoSourceConfigurationOptions',
  'VideoSourceConfigurationOptionsExtension' => '\\VideoSourceConfigurationOptionsExtension',
  'VideoSourceConfigurationOptionsExtension2' => '\\VideoSourceConfigurationOptionsExtension2',
  'RotateOptions' => '\\RotateOptions',
  'RotateOptionsExtension' => '\\RotateOptionsExtension',
  'SceneOrientation' => '\\SceneOrientation',
  'VideoEncoderConfiguration' => '\\VideoEncoderConfiguration',
  'VideoResolution' => '\\VideoResolution',
  'VideoRateControl' => '\\VideoRateControl',
  'Mpeg4Configuration' => '\\Mpeg4Configuration',
  'H264Configuration' => '\\H264Configuration',
  'VideoEncoderConfigurationOptions' => '\\VideoEncoderConfigurationOptions',
  'VideoEncoderOptionsExtension' => '\\VideoEncoderOptionsExtension',
  'VideoEncoderOptionsExtension2' => '\\VideoEncoderOptionsExtension2',
  'JpegOptions' => '\\JpegOptions',
  'JpegOptions2' => '\\JpegOptions2',
  'Mpeg4Options' => '\\Mpeg4Options',
  'Mpeg4Options2' => '\\Mpeg4Options2',
  'H264Options' => '\\H264Options',
  'H264Options2' => '\\H264Options2',
  'VideoEncoder2Configuration' => '\\VideoEncoder2Configuration',
  'VideoResolution2' => '\\VideoResolution2',
  'VideoRateControl2' => '\\VideoRateControl2',
  'VideoEncoder2ConfigurationOptions' => '\\VideoEncoder2ConfigurationOptions',
  'AudioSourceConfiguration' => '\\AudioSourceConfiguration',
  'AudioSourceConfigurationOptions' => '\\AudioSourceConfigurationOptions',
  'AudioSourceOptionsExtension' => '\\AudioSourceOptionsExtension',
  'AudioEncoderConfiguration' => '\\AudioEncoderConfiguration',
  'AudioEncoderConfigurationOptions' => '\\AudioEncoderConfigurationOptions',
  'AudioEncoderConfigurationOption' => '\\AudioEncoderConfigurationOption',
  'AudioEncoder2Configuration' => '\\AudioEncoder2Configuration',
  'AudioEncoder2ConfigurationOptions' => '\\AudioEncoder2ConfigurationOptions',
  'VideoAnalyticsConfiguration' => '\\VideoAnalyticsConfiguration',
  'MetadataConfiguration' => '\\MetadataConfiguration',
  'MetadataConfigurationExtension' => '\\MetadataConfigurationExtension',
  'PTZFilter' => '\\PTZFilter',
  'EventSubscription' => '\\EventSubscription',
  'MetadataConfigurationOptions' => '\\MetadataConfigurationOptions',
  'MetadataConfigurationOptionsExtension' => '\\MetadataConfigurationOptionsExtension',
  'MetadataConfigurationOptionsExtension2' => '\\MetadataConfigurationOptionsExtension2',
  'PTZStatusFilterOptions' => '\\PTZStatusFilterOptions',
  'PTZStatusFilterOptionsExtension' => '\\PTZStatusFilterOptionsExtension',
  'VideoOutput' => '\\VideoOutput',
  'VideoOutputExtension' => '\\VideoOutputExtension',
  'VideoOutputConfiguration' => '\\VideoOutputConfiguration',
  'VideoOutputConfigurationOptions' => '\\VideoOutputConfigurationOptions',
  'VideoDecoderConfigurationOptions' => '\\VideoDecoderConfigurationOptions',
  'H264DecOptions' => '\\H264DecOptions',
  'JpegDecOptions' => '\\JpegDecOptions',
  'Mpeg4DecOptions' => '\\Mpeg4DecOptions',
  'VideoDecoderConfigurationOptionsExtension' => '\\VideoDecoderConfigurationOptionsExtension',
  'AudioOutput' => '\\AudioOutput',
  'AudioOutputConfiguration' => '\\AudioOutputConfiguration',
  'AudioOutputConfigurationOptions' => '\\AudioOutputConfigurationOptions',
  'AudioDecoderConfiguration' => '\\AudioDecoderConfiguration',
  'AudioDecoderConfigurationOptions' => '\\AudioDecoderConfigurationOptions',
  'G711DecOptions' => '\\G711DecOptions',
  'AACDecOptions' => '\\AACDecOptions',
  'G726DecOptions' => '\\G726DecOptions',
  'AudioDecoderConfigurationOptionsExtension' => '\\AudioDecoderConfigurationOptionsExtension',
  'MulticastConfiguration' => '\\MulticastConfiguration',
  'StreamSetup' => '\\StreamSetup',
  'Transport' => '\\Transport',
  'MediaUri' => '\\MediaUri',
  'Scope' => '\\Scope',
  'NetworkInterface' => '\\NetworkInterface',
  'NetworkInterfaceExtension' => '\\NetworkInterfaceExtension',
  'Dot3Configuration' => '\\Dot3Configuration',
  'NetworkInterfaceExtension2' => '\\NetworkInterfaceExtension2',
  'NetworkInterfaceLink' => '\\NetworkInterfaceLink',
  'NetworkInterfaceConnectionSetting' => '\\NetworkInterfaceConnectionSetting',
  'NetworkInterfaceInfo' => '\\NetworkInterfaceInfo',
  'IPv6NetworkInterface' => '\\IPv6NetworkInterface',
  'IPv4NetworkInterface' => '\\IPv4NetworkInterface',
  'IPv4Configuration' => '\\IPv4Configuration',
  'IPv6Configuration' => '\\IPv6Configuration',
  'IPv6ConfigurationExtension' => '\\IPv6ConfigurationExtension',
  'NetworkProtocol' => '\\NetworkProtocol',
  'NetworkProtocolExtension' => '\\NetworkProtocolExtension',
  'NetworkHost' => '\\NetworkHost',
  'NetworkHostExtension' => '\\NetworkHostExtension',
  'IPAddress' => '\\IPAddress',
  'PrefixedIPv4Address' => '\\PrefixedIPv4Address',
  'PrefixedIPv6Address' => '\\PrefixedIPv6Address',
  'HostnameInformation' => '\\HostnameInformation',
  'HostnameInformationExtension' => '\\HostnameInformationExtension',
  'DNSInformation' => '\\DNSInformation',
  'DNSInformationExtension' => '\\DNSInformationExtension',
  'NTPInformation' => '\\NTPInformation',
  'NTPInformationExtension' => '\\NTPInformationExtension',
  'DynamicDNSInformation' => '\\DynamicDNSInformation',
  'DynamicDNSInformationExtension' => '\\DynamicDNSInformationExtension',
  'NetworkInterfaceSetConfiguration' => '\\NetworkInterfaceSetConfiguration',
  'NetworkInterfaceSetConfigurationExtension' => '\\NetworkInterfaceSetConfigurationExtension',
  'IPv6NetworkInterfaceSetConfiguration' => '\\IPv6NetworkInterfaceSetConfiguration',
  'IPv4NetworkInterfaceSetConfiguration' => '\\IPv4NetworkInterfaceSetConfiguration',
  'NetworkGateway' => '\\NetworkGateway',
  'NetworkZeroConfiguration' => '\\NetworkZeroConfiguration',
  'NetworkZeroConfigurationExtension' => '\\NetworkZeroConfigurationExtension',
  'NetworkZeroConfigurationExtension2' => '\\NetworkZeroConfigurationExtension2',
  'IPAddressFilter' => '\\IPAddressFilter',
  'IPAddressFilterExtension' => '\\IPAddressFilterExtension',
  'Dot11Configuration' => '\\Dot11Configuration',
  'Dot11SecurityConfiguration' => '\\Dot11SecurityConfiguration',
  'Dot11SecurityConfigurationExtension' => '\\Dot11SecurityConfigurationExtension',
  'Dot11PSKSet' => '\\Dot11PSKSet',
  'Dot11PSKSetExtension' => '\\Dot11PSKSetExtension',
  'NetworkInterfaceSetConfigurationExtension2' => '\\NetworkInterfaceSetConfigurationExtension2',
  'Dot11Capabilities' => '\\Dot11Capabilities',
  'Dot11Status' => '\\Dot11Status',
  'Dot11AvailableNetworks' => '\\Dot11AvailableNetworks',
  'Dot11AvailableNetworksExtension' => '\\Dot11AvailableNetworksExtension',
  'Capabilities' => '\\Capabilities',
  'CapabilitiesExtension' => '\\CapabilitiesExtension',
  'CapabilitiesExtension2' => '\\CapabilitiesExtension2',
  'AnalyticsCapabilities' => '\\AnalyticsCapabilities',
  'DeviceCapabilities' => '\\DeviceCapabilities',
  'DeviceCapabilitiesExtension' => '\\DeviceCapabilitiesExtension',
  'EventCapabilities' => '\\EventCapabilities',
  'IOCapabilities' => '\\IOCapabilities',
  'IOCapabilitiesExtension' => '\\IOCapabilitiesExtension',
  'IOCapabilitiesExtension2' => '\\IOCapabilitiesExtension2',
  'MediaCapabilities' => '\\MediaCapabilities',
  'MediaCapabilitiesExtension' => '\\MediaCapabilitiesExtension',
  'RealTimeStreamingCapabilities' => '\\RealTimeStreamingCapabilities',
  'RealTimeStreamingCapabilitiesExtension' => '\\RealTimeStreamingCapabilitiesExtension',
  'ProfileCapabilities' => '\\ProfileCapabilities',
  'NetworkCapabilities' => '\\NetworkCapabilities',
  'NetworkCapabilitiesExtension' => '\\NetworkCapabilitiesExtension',
  'NetworkCapabilitiesExtension2' => '\\NetworkCapabilitiesExtension2',
  'SecurityCapabilities' => '\\SecurityCapabilities',
  'SecurityCapabilitiesExtension' => '\\SecurityCapabilitiesExtension',
  'SecurityCapabilitiesExtension2' => '\\SecurityCapabilitiesExtension2',
  'SystemCapabilities' => '\\SystemCapabilities',
  'SystemCapabilitiesExtension' => '\\SystemCapabilitiesExtension',
  'SystemCapabilitiesExtension2' => '\\SystemCapabilitiesExtension2',
  'OnvifVersion' => '\\OnvifVersion',
  'ImagingCapabilities' => '\\ImagingCapabilities',
  'PTZCapabilities' => '\\PTZCapabilities',
  'DeviceIOCapabilities' => '\\DeviceIOCapabilities',
  'DisplayCapabilities' => '\\DisplayCapabilities',
  'RecordingCapabilities' => '\\RecordingCapabilities',
  'SearchCapabilities' => '\\SearchCapabilities',
  'ReplayCapabilities' => '\\ReplayCapabilities',
  'ReceiverCapabilities' => '\\ReceiverCapabilities',
  'AnalyticsDeviceCapabilities' => '\\AnalyticsDeviceCapabilities',
  'AnalyticsDeviceExtension' => '\\AnalyticsDeviceExtension',
  'SystemLog' => '\\SystemLog',
  'SupportInformation' => '\\SupportInformation',
  'BinaryData' => '\\BinaryData',
  'AttachmentData' => '\\AttachmentData',
  'BackupFile' => '\\BackupFile',
  'SystemLogUriList' => '\\SystemLogUriList',
  'SystemLogUri' => '\\SystemLogUri',
  'SystemDateTime' => '\\SystemDateTime',
  'SystemDateTimeExtension' => '\\SystemDateTimeExtension',
  'DateTime' => '\\DateTimeCustom',
  'Date' => '\\Date',
  'Time' => '\\Time',
  'TimeZone' => '\\TimeZone',
  'RemoteUser' => '\\RemoteUser',
  'User' => '\\User',
  'UserExtension' => '\\UserExtension',
  'CertificateGenerationParameters' => '\\CertificateGenerationParameters',
  'CertificateGenerationParametersExtension' => '\\CertificateGenerationParametersExtension',
  'Certificate' => '\\Certificate',
  'CertificateStatus' => '\\CertificateStatus',
  'CertificateWithPrivateKey' => '\\CertificateWithPrivateKey',
  'CertificateInformation' => '\\CertificateInformation',
  'CertificateUsage' => '\\CertificateUsage',
  'CertificateInformationExtension' => '\\CertificateInformationExtension',
  'Dot1XConfiguration' => '\\Dot1XConfiguration',
  'Dot1XConfigurationExtension' => '\\Dot1XConfigurationExtension',
  'EAPMethodConfiguration' => '\\EAPMethodConfiguration',
  'EapMethodExtension' => '\\EapMethodExtension',
  'TLSConfiguration' => '\\TLSConfiguration',
  'GenericEapPwdConfigurationExtension' => '\\GenericEapPwdConfigurationExtension',
  'RelayOutputSettings' => '\\RelayOutputSettings',
  'RelayOutput' => '\\RelayOutput',
  'DigitalInput' => '\\DigitalInput',
  'PTZNode' => '\\PTZNode',
  'PTZNodeExtension' => '\\PTZNodeExtension',
  'PTZNodeExtension2' => '\\PTZNodeExtension2',
  'PTZPresetTourSupported' => '\\PTZPresetTourSupported',
  'PTZPresetTourSupportedExtension' => '\\PTZPresetTourSupportedExtension',
  'PTZConfiguration' => '\\PTZConfiguration',
  'PTZConfigurationExtension' => '\\PTZConfigurationExtension',
  'PTZConfigurationExtension2' => '\\PTZConfigurationExtension2',
  'PTControlDirection' => '\\PTControlDirection',
  'PTControlDirectionExtension' => '\\PTControlDirectionExtension',
  'EFlip' => '\\EFlip',
  'Reverse' => '\\Reverse',
  'PTZConfigurationOptions' => '\\PTZConfigurationOptions',
  'PTZConfigurationOptions2' => '\\PTZConfigurationOptions2',
  'PTControlDirectionOptions' => '\\PTControlDirectionOptions',
  'PTControlDirectionOptionsExtension' => '\\PTControlDirectionOptionsExtension',
  'EFlipOptions' => '\\EFlipOptions',
  'EFlipOptionsExtension' => '\\EFlipOptionsExtension',
  'ReverseOptions' => '\\ReverseOptions',
  'ReverseOptionsExtension' => '\\ReverseOptionsExtension',
  'PanTiltLimits' => '\\PanTiltLimits',
  'ZoomLimits' => '\\ZoomLimits',
  'PTZSpaces' => '\\PTZSpaces',
  'PTZSpacesExtension' => '\\PTZSpacesExtension',
  'Space2DDescription' => '\\Space2DDescription',
  'Space1DDescription' => '\\Space1DDescription',
  'PTZSpeed' => '\\PTZSpeed',
  'PTZPreset' => '\\PTZPreset',
  'PresetTour' => '\\PresetTour',
  'PTZPresetTourExtension' => '\\PTZPresetTourExtension',
  'PTZPresetTourSpot' => '\\PTZPresetTourSpot',
  'PTZPresetTourSpotExtension' => '\\PTZPresetTourSpotExtension',
  'PTZPresetTourPresetDetail' => '\\PTZPresetTourPresetDetail',
  'PTZPresetTourTypeExtension' => '\\PTZPresetTourTypeExtension',
  'PTZPresetTourStatus' => '\\PTZPresetTourStatus',
  'PTZPresetTourStatusExtension' => '\\PTZPresetTourStatusExtension',
  'PTZPresetTourStartingCondition' => '\\PTZPresetTourStartingCondition',
  'PTZPresetTourStartingConditionExtension' => '\\PTZPresetTourStartingConditionExtension',
  'PTZPresetTourOptions' => '\\PTZPresetTourOptions',
  'PTZPresetTourSpotOptions' => '\\PTZPresetTourSpotOptions',
  'PTZPresetTourPresetDetailOptions' => '\\PTZPresetTourPresetDetailOptions',
  'PTZPresetTourPresetDetailOptionsExtension' => '\\PTZPresetTourPresetDetailOptionsExtension',
  'PTZPresetTourStartingConditionOptions' => '\\PTZPresetTourStartingConditionOptions',
  'PTZPresetTourStartingConditionOptionsExtension' => '\\PTZPresetTourStartingConditionOptionsExtension',
  'ImagingStatus' => '\\ImagingStatus',
  'FocusStatus' => '\\FocusStatus',
  'FocusConfiguration' => '\\FocusConfiguration',
  'ImagingSettings' => '\\ImagingSettings',
  'ImagingSettingsExtension' => '\\ImagingSettingsExtension',
  'Exposure' => '\\Exposure',
  'WideDynamicRange' => '\\WideDynamicRange',
  'BacklightCompensation' => '\\BacklightCompensation',
  'ImagingOptions' => '\\ImagingOptions',
  'WideDynamicRangeOptions' => '\\WideDynamicRangeOptions',
  'BacklightCompensationOptions' => '\\BacklightCompensationOptions',
  'FocusOptions' => '\\FocusOptions',
  'ExposureOptions' => '\\ExposureOptions',
  'WhiteBalanceOptions' => '\\WhiteBalanceOptions',
  'FocusMove' => '\\FocusMove',
  'AbsoluteFocus' => '\\AbsoluteFocus',
  'RelativeFocus' => '\\RelativeFocus',
  'ContinuousFocus' => '\\ContinuousFocus',
  'MoveOptions' => '\\MoveOptions',
  'AbsoluteFocusOptions' => '\\AbsoluteFocusOptions',
  'RelativeFocusOptions' => '\\RelativeFocusOptions',
  'ContinuousFocusOptions' => '\\ContinuousFocusOptions',
  'WhiteBalance' => '\\WhiteBalance',
  'ImagingStatus20' => '\\ImagingStatus20',
  'ImagingStatus20Extension' => '\\ImagingStatus20Extension',
  'FocusStatus20' => '\\FocusStatus20',
  'FocusStatus20Extension' => '\\FocusStatus20Extension',
  'ImagingSettings20' => '\\ImagingSettings20',
  'ImagingSettingsExtension20' => '\\ImagingSettingsExtension20',
  'ImagingSettingsExtension202' => '\\ImagingSettingsExtension202',
  'ImagingSettingsExtension203' => '\\ImagingSettingsExtension203',
  'ImagingSettingsExtension204' => '\\ImagingSettingsExtension204',
  'ImageStabilization' => '\\ImageStabilization',
  'ImageStabilizationExtension' => '\\ImageStabilizationExtension',
  'IrCutFilterAutoAdjustment' => '\\IrCutFilterAutoAdjustment',
  'IrCutFilterAutoAdjustmentExtension' => '\\IrCutFilterAutoAdjustmentExtension',
  'WideDynamicRange20' => '\\WideDynamicRange20',
  'BacklightCompensation20' => '\\BacklightCompensation20',
  'Exposure20' => '\\Exposure20',
  'ToneCompensation' => '\\ToneCompensation',
  'ToneCompensationExtension' => '\\ToneCompensationExtension',
  'Defogging' => '\\Defogging',
  'DefoggingExtension' => '\\DefoggingExtension',
  'NoiseReduction' => '\\NoiseReduction',
  'ImagingOptions20' => '\\ImagingOptions20',
  'ImagingOptions20Extension' => '\\ImagingOptions20Extension',
  'ImagingOptions20Extension2' => '\\ImagingOptions20Extension2',
  'ImagingOptions20Extension3' => '\\ImagingOptions20Extension3',
  'ImagingOptions20Extension4' => '\\ImagingOptions20Extension4',
  'ImageStabilizationOptions' => '\\ImageStabilizationOptions',
  'ImageStabilizationOptionsExtension' => '\\ImageStabilizationOptionsExtension',
  'IrCutFilterAutoAdjustmentOptions' => '\\IrCutFilterAutoAdjustmentOptions',
  'IrCutFilterAutoAdjustmentOptionsExtension' => '\\IrCutFilterAutoAdjustmentOptionsExtension',
  'WideDynamicRangeOptions20' => '\\WideDynamicRangeOptions20',
  'BacklightCompensationOptions20' => '\\BacklightCompensationOptions20',
  'ExposureOptions20' => '\\ExposureOptions20',
  'MoveOptions20' => '\\MoveOptions20',
  'RelativeFocusOptions20' => '\\RelativeFocusOptions20',
  'WhiteBalance20' => '\\WhiteBalance20',
  'WhiteBalance20Extension' => '\\WhiteBalance20Extension',
  'FocusConfiguration20' => '\\FocusConfiguration20',
  'FocusConfiguration20Extension' => '\\FocusConfiguration20Extension',
  'WhiteBalanceOptions20' => '\\WhiteBalanceOptions20',
  'WhiteBalanceOptions20Extension' => '\\WhiteBalanceOptions20Extension',
  'FocusOptions20' => '\\FocusOptions20',
  'FocusOptions20Extension' => '\\FocusOptions20Extension',
  'ToneCompensationOptions' => '\\ToneCompensationOptions',
  'DefoggingOptions' => '\\DefoggingOptions',
  'NoiseReductionOptions' => '\\NoiseReductionOptions',
  'MessageExtension' => '\\MessageExtension',
  'ItemList' => '\\ItemList',
  'SimpleItem' => '\\SimpleItem',
  'ElementItem' => '\\ElementItem',
  'ItemListExtension' => '\\ItemListExtension',
  'MessageDescription' => '\\MessageDescription',
  'MessageDescriptionExtension' => '\\MessageDescriptionExtension',
  'ItemListDescription' => '\\ItemListDescription',
  'SimpleItemDescription' => '\\SimpleItemDescription',
  'ElementItemDescription' => '\\ElementItemDescription',
  'ItemListDescriptionExtension' => '\\ItemListDescriptionExtension',
  'Polyline' => '\\Polyline',
  'AnalyticsEngineConfiguration' => '\\AnalyticsEngineConfiguration',
  'AnalyticsEngineConfigurationExtension' => '\\AnalyticsEngineConfigurationExtension',
  'RuleEngineConfiguration' => '\\RuleEngineConfiguration',
  'RuleEngineConfigurationExtension' => '\\RuleEngineConfigurationExtension',
  'Config' => '\\Config',
  'ConfigDescription' => '\\ConfigDescription',
  'Messages' => '\\Messages',
  'ConfigDescriptionExtension' => '\\ConfigDescriptionExtension',
  'SupportedRules' => '\\SupportedRules',
  'SupportedRulesExtension' => '\\SupportedRulesExtension',
  'SupportedAnalyticsModules' => '\\SupportedAnalyticsModules',
  'SupportedAnalyticsModulesExtension' => '\\SupportedAnalyticsModulesExtension',
  'PolygonConfiguration' => '\\PolygonConfiguration',
  'PolylineArray' => '\\PolylineArray',
  'PolylineArrayExtension' => '\\PolylineArrayExtension',
  'PolylineArrayConfiguration' => '\\PolylineArrayConfiguration',
  'MotionExpression' => '\\MotionExpression',
  'MotionExpressionConfiguration' => '\\MotionExpressionConfiguration',
  'CellLayout' => '\\CellLayout',
  'PaneConfiguration' => '\\PaneConfiguration',
  'PaneLayout' => '\\PaneLayout',
  'Layout' => '\\Layout',
  'LayoutExtension' => '\\LayoutExtension',
  'CodingCapabilities' => '\\CodingCapabilities',
  'LayoutOptions' => '\\LayoutOptions',
  'LayoutOptionsExtension' => '\\LayoutOptionsExtension',
  'PaneLayoutOptions' => '\\PaneLayoutOptions',
  'PaneOptionExtension' => '\\PaneOptionExtension',
  'Receiver' => '\\Receiver',
  'ReceiverConfiguration' => '\\ReceiverConfiguration',
  'ReceiverStateInformation' => '\\ReceiverStateInformation',
  'SourceReference' => '\\SourceReference',
  'DateTimeRange' => '\\DateTimeRange',
  'RecordingSummary' => '\\RecordingSummary',
  'SearchScope' => '\\SearchScope',
  'SearchScopeExtension' => '\\SearchScopeExtension',
  'EventFilter' => '\\EventFilter',
  'PTZPositionFilter' => '\\PTZPositionFilter',
  'MetadataFilter' => '\\MetadataFilter',
  'FindRecordingResultList' => '\\FindRecordingResultList',
  'FindEventResultList' => '\\FindEventResultList',
  'FindEventResult' => '\\FindEventResult',
  'FindPTZPositionResultList' => '\\FindPTZPositionResultList',
  'FindPTZPositionResult' => '\\FindPTZPositionResult',
  'FindMetadataResultList' => '\\FindMetadataResultList',
  'FindMetadataResult' => '\\FindMetadataResult',
  'RecordingInformation' => '\\RecordingInformation',
  'RecordingSourceInformation' => '\\RecordingSourceInformation',
  'TrackInformation' => '\\TrackInformation',
  'MediaAttributes' => '\\MediaAttributes',
  'TrackAttributes' => '\\TrackAttributes',
  'TrackAttributesExtension' => '\\TrackAttributesExtension',
  'VideoAttributes' => '\\VideoAttributes',
  'AudioAttributes' => '\\AudioAttributes',
  'MetadataAttributes' => '\\MetadataAttributes',
  'RecordingConfiguration' => '\\RecordingConfiguration',
  'TrackConfiguration' => '\\TrackConfiguration',
  'GetRecordingsResponseItem' => '\\GetRecordingsResponseItem',
  'GetTracksResponseList' => '\\GetTracksResponseList',
  'GetTracksResponseItem' => '\\GetTracksResponseItem',
  'RecordingJobConfiguration' => '\\RecordingJobConfiguration',
  'RecordingJobConfigurationExtension' => '\\RecordingJobConfigurationExtension',
  'RecordingJobSource' => '\\RecordingJobSource',
  'RecordingJobSourceExtension' => '\\RecordingJobSourceExtension',
  'RecordingJobTrack' => '\\RecordingJobTrack',
  'RecordingJobStateInformation' => '\\RecordingJobStateInformation',
  'RecordingJobStateInformationExtension' => '\\RecordingJobStateInformationExtension',
  'RecordingJobStateSource' => '\\RecordingJobStateSource',
  'RecordingJobStateTracks' => '\\RecordingJobStateTracks',
  'RecordingJobStateTrack' => '\\RecordingJobStateTrack',
  'GetRecordingJobsResponseItem' => '\\GetRecordingJobsResponseItem',
  'ReplayConfiguration' => '\\ReplayConfiguration',
  'AnalyticsEngine' => '\\AnalyticsEngine',
  'AnalyticsDeviceEngineConfiguration' => '\\AnalyticsDeviceEngineConfiguration',
  'AnalyticsDeviceEngineConfigurationExtension' => '\\AnalyticsDeviceEngineConfigurationExtension',
  'EngineConfiguration' => '\\EngineConfiguration',
  'AnalyticsEngineInputInfo' => '\\AnalyticsEngineInputInfo',
  'AnalyticsEngineInputInfoExtension' => '\\AnalyticsEngineInputInfoExtension',
  'AnalyticsEngineInput' => '\\AnalyticsEngineInput',
  'SourceIdentification' => '\\SourceIdentification',
  'SourceIdentificationExtension' => '\\SourceIdentificationExtension',
  'MetadataInput' => '\\MetadataInput',
  'MetadataInputExtension' => '\\MetadataInputExtension',
  'AnalyticsEngineControl' => '\\AnalyticsEngineControl',
  'AnalyticsStateInformation' => '\\AnalyticsStateInformation',
  'AnalyticsState' => '\\AnalyticsState',
  'ActionEngineEventPayload' => '\\ActionEngineEventPayload',
  'ActionEngineEventPayloadExtension' => '\\ActionEngineEventPayloadExtension',
  'AudioClassCandidate' => '\\AudioClassCandidate',
  'AudioClassDescriptor' => '\\AudioClassDescriptor',
  'AudioClassDescriptorExtension' => '\\AudioClassDescriptorExtension',
  'ActiveConnection' => '\\ActiveConnection',
  'ProfileStatus' => '\\ProfileStatus',
  'ProfileStatusExtension' => '\\ProfileStatusExtension',
  'OSDReference' => '\\OSDReference',
  'OSDPosConfiguration' => '\\OSDPosConfiguration',
  'OSDPosConfigurationExtension' => '\\OSDPosConfigurationExtension',
  'OSDColor' => '\\OSDColor',
  'OSDTextConfiguration' => '\\OSDTextConfiguration',
  'OSDTextConfigurationExtension' => '\\OSDTextConfigurationExtension',
  'OSDImgConfiguration' => '\\OSDImgConfiguration',
  'OSDImgConfigurationExtension' => '\\OSDImgConfigurationExtension',
  'ColorspaceRange' => '\\ColorspaceRange',
  'ColorOptions' => '\\ColorOptions',
  'OSDColorOptions' => '\\OSDColorOptions',
  'OSDColorOptionsExtension' => '\\OSDColorOptionsExtension',
  'OSDTextOptions' => '\\OSDTextOptions',
  'OSDTextOptionsExtension' => '\\OSDTextOptionsExtension',
  'OSDImgOptions' => '\\OSDImgOptions',
  'OSDImgOptionsExtension' => '\\OSDImgOptionsExtension',
  'OSDConfiguration' => '\\OSDConfiguration',
  'OSDConfigurationExtension' => '\\OSDConfigurationExtension',
  'MaximumNumberOfOSDs' => '\\MaximumNumberOfOSDs',
  'OSDConfigurationOptions' => '\\OSDConfigurationOptions',
  'OSDConfigurationOptionsExtension' => '\\OSDConfigurationOptionsExtension',
  'FileProgress' => '\\FileProgress',
  'ArrayOfFileProgress' => '\\ArrayOfFileProgress',
  'ArrayOfFileProgressExtension' => '\\ArrayOfFileProgressExtension',
  'StorageReferencePath' => '\\StorageReferencePath',
  'StorageReferencePathExtension' => '\\StorageReferencePathExtension',
  'GetServiceCapabilities' => '\\GetServiceCapabilities',
  'GetServiceCapabilitiesResponse' => '\\GetServiceCapabilitiesResponse',
  'GetNodes' => '\\GetNodes',
  'GetNodesResponse' => '\\GetNodesResponse',
  'GetNode' => '\\GetNode',
  'GetNodeResponse' => '\\GetNodeResponse',
  'GetConfigurations' => '\\GetConfigurations',
  'GetConfigurationsResponse' => '\\GetConfigurationsResponse',
  'GetConfiguration' => '\\GetConfiguration',
  'GetConfigurationResponse' => '\\GetConfigurationResponse',
  'SetConfiguration' => '\\SetConfiguration',
  'SetConfigurationResponse' => '\\SetConfigurationResponse',
  'GetConfigurationOptions' => '\\GetConfigurationOptions',
  'GetConfigurationOptionsResponse' => '\\GetConfigurationOptionsResponse',
  'SendAuxiliaryCommand' => '\\SendAuxiliaryCommand',
  'SendAuxiliaryCommandResponse' => '\\SendAuxiliaryCommandResponse',
  'GetPresets' => '\\GetPresets',
  'GetPresetsResponse' => '\\GetPresetsResponse',
  'SetPreset' => '\\SetPreset',
  'SetPresetResponse' => '\\SetPresetResponse',
  'RemovePreset' => '\\RemovePreset',
  'RemovePresetResponse' => '\\RemovePresetResponse',
  'GotoPreset' => '\\GotoPreset',
  'GotoPresetResponse' => '\\GotoPresetResponse',
  'GetStatus' => '\\GetStatus',
  'GetStatusResponse' => '\\GetStatusResponse',
  'GotoHomePosition' => '\\GotoHomePosition',
  'GotoHomePositionResponse' => '\\GotoHomePositionResponse',
  'SetHomePosition' => '\\SetHomePosition',
  'SetHomePositionResponse' => '\\SetHomePositionResponse',
  'ContinuousMove' => '\\ContinuousMove',
  'ContinuousMoveResponse' => '\\ContinuousMoveResponse',
  'RelativeMove' => '\\RelativeMove',
  'RelativeMoveResponse' => '\\RelativeMoveResponse',
  'AbsoluteMove' => '\\AbsoluteMove',
  'AbsoluteMoveResponse' => '\\AbsoluteMoveResponse',
  'GeoMove' => '\\GeoMove',
  'GeoMoveResponse' => '\\GeoMoveResponse',
  'Stop' => '\\Stop',
  'StopResponse' => '\\StopResponse',
  'GetPresetTours' => '\\GetPresetTours',
  'GetPresetToursResponse' => '\\GetPresetToursResponse',
  'GetPresetTour' => '\\GetPresetTour',
  'GetPresetTourResponse' => '\\GetPresetTourResponse',
  'GetPresetTourOptions' => '\\GetPresetTourOptions',
  'GetPresetTourOptionsResponse' => '\\GetPresetTourOptionsResponse',
  'CreatePresetTour' => '\\CreatePresetTour',
  'CreatePresetTourResponse' => '\\CreatePresetTourResponse',
  'ModifyPresetTour' => '\\ModifyPresetTour',
  'ModifyPresetTourResponse' => '\\ModifyPresetTourResponse',
  'OperatePresetTour' => '\\OperatePresetTour',
  'OperatePresetTourResponse' => '\\OperatePresetTourResponse',
  'RemovePresetTour' => '\\RemovePresetTour',
  'RemovePresetTourResponse' => '\\RemovePresetTourResponse',
  'GetCompatibleConfigurations' => '\\GetCompatibleConfigurations',
  'GetCompatibleConfigurationsResponse' => '\\GetCompatibleConfigurationsResponse',
);

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
    
  foreach (self::$classmap as $key => $value) {
    if (!isset($options['classmap'][$key])) {
      $options['classmap'][$key] = $value;
    }
  }
      $options = array_merge(array (
  'features' => 1,
), $options);
      if (!$wsdl) {
        $wsdl = 'http://ptz.test/ptz20.wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Returns the capabilities of the PTZ service. The result is returned in a typed answer.
     *
     * @param GetServiceCapabilities $parameters
     * @return GetServiceCapabilitiesResponse
     */
    public function GetServiceCapabilities(GetServiceCapabilities $parameters)
    {
      return $this->__soapCall('GetServiceCapabilities', array($parameters));
    }

    /**
     * Get all the existing PTZConfigurations from the device.
                
                The default Position/Translation/Velocity Spaces are introduced to allow NVCs sending move
                requests without the need to specify a certain coordinate system. The default Speeds are
                introduced to control the speed of move requests (absolute, relative, preset), where no
                explicit speed has been set.
                
                The allowed pan and tilt range for Pan/Tilt Limits is defined by a two-dimensional space range
                that is mapped to a specific Absolute Pan/Tilt Position Space. At least one Pan/Tilt Position
                Space is required by the PTZNode to support Pan/Tilt limits. The limits apply to all supported
                absolute, relative and continuous Pan/Tilt movements. The limits shall be checked within the
                coordinate system for which the limits have been specified. That means that even if
                movements are specified in a different coordinate system, the requested movements shall be
                transformed to the coordinate system of the limits where the limits can be checked. When a
                relative or continuous movements is specified, which would leave the specified limits, the PTZ
                unit has to move along the specified limits. The Zoom Limits have to be interpreted
                accordingly.
     *
     * @param GetConfigurations $parameters
     * @return GetConfigurationsResponse
     */
    public function GetConfigurations(GetConfigurations $parameters)
    {
      return $this->__soapCall('GetConfigurations', array($parameters));
    }

    /**
     * Operation to request all PTZ presets for the PTZNode
                in the selected profile. The operation is supported if there is support
                for at least on PTZ preset by the PTZNode.
     *
     * @param GetPresets $parameters
     * @return GetPresetsResponse
     */
    public function GetPresets(GetPresets $parameters)
    {
      return $this->__soapCall('GetPresets', array($parameters));
    }

    /**
     * The SetPreset command saves the current device position parameters so that the device can
                move to the saved preset position through the GotoPreset operation.
                In order to create a new preset, the SetPresetRequest contains no PresetToken. If creation is
                successful, the Response contains the PresetToken which uniquely identifies the Preset. An
                existing Preset can be overwritten by specifying the PresetToken of the corresponding Preset.
                In both cases (overwriting or creation) an optional PresetName can be specified. The
                operation fails if the PTZ device is moving during the SetPreset operation.
                The device MAY internally save additional states such as imaging properties in the PTZ
                Preset which then should be recalled in the GotoPreset operation.
     *
     * @param SetPreset $parameters
     * @return SetPresetResponse
     */
    public function SetPreset(SetPreset $parameters)
    {
      return $this->__soapCall('SetPreset', array($parameters));
    }

    /**
     * Operation to remove a PTZ preset for the Node in
                the
                selected profile. The operation is supported if the
                PresetPosition
                capability exists for teh Node in the
                selected profile.
     *
     * @param RemovePreset $parameters
     * @return RemovePresetResponse
     */
    public function RemovePreset(RemovePreset $parameters)
    {
      return $this->__soapCall('RemovePreset', array($parameters));
    }

    /**
     * Operation to go to a saved preset position for the
                PTZNode in the selected profile. The operation is supported if there is
                support for at least on PTZ preset by the PTZNode.
     *
     * @param GotoPreset $parameters
     * @return GotoPresetResponse
     */
    public function GotoPreset(GotoPreset $parameters)
    {
      return $this->__soapCall('GotoPreset', array($parameters));
    }

    /**
     * Operation to request PTZ status for the Node in the
                selected profile.
     *
     * @param GetStatus $parameters
     * @return GetStatusResponse
     */
    public function GetStatus(GetStatus $parameters)
    {
      return $this->__soapCall('GetStatus', array($parameters));
    }

    /**
     * Get a specific PTZconfiguration from the device, identified by its reference token or name.
                
                The default Position/Translation/Velocity Spaces are introduced to allow NVCs sending move
                requests without the need to specify a certain coordinate system. The default Speeds are
                introduced to control the speed of move requests (absolute, relative, preset), where no
                explicit speed has been set.
                
                The allowed pan and tilt range for Pan/Tilt Limits is defined by a two-dimensional space range
                that is mapped to a specific Absolute Pan/Tilt Position Space. At least one Pan/Tilt Position
                Space is required by the PTZNode to support Pan/Tilt limits. The limits apply to all supported
                absolute, relative and continuous Pan/Tilt movements. The limits shall be checked within the
                coordinate system for which the limits have been specified. That means that even if
                movements are specified in a different coordinate system, the requested movements shall be
                transformed to the coordinate system of the limits where the limits can be checked. When a
                relative or continuous movements is specified, which would leave the specified limits, the PTZ
                unit has to move along the specified limits. The Zoom Limits have to be interpreted
                accordingly.
     *
     * @param GetConfiguration $parameters
     * @return GetConfigurationResponse
     */
    public function GetConfiguration(GetConfiguration $parameters)
    {
      return $this->__soapCall('GetConfiguration', array($parameters));
    }

    /**
     * Get the descriptions of the available PTZ Nodes.
                
                A PTZ-capable device may have multiple PTZ Nodes. The PTZ Nodes may represent
                mechanical PTZ drivers, uploaded PTZ drivers or digital PTZ drivers. PTZ Nodes are the
                lowest level entities in the PTZ control API and reflect the supported PTZ capabilities. The
                PTZ Node is referenced either by its name or by its reference token.
     *
     * @param GetNodes $parameters
     * @return GetNodesResponse
     */
    public function GetNodes(GetNodes $parameters)
    {
      return $this->__soapCall('GetNodes', array($parameters));
    }

    /**
     * Get a specific PTZ Node identified by a reference
                token or a name.
     *
     * @param GetNode $parameters
     * @return GetNodeResponse
     */
    public function GetNode(GetNode $parameters)
    {
      return $this->__soapCall('GetNode', array($parameters));
    }

    /**
     * Set/update a existing PTZConfiguration on the device.
     *
     * @param SetConfiguration $parameters
     * @return SetConfigurationResponse
     */
    public function SetConfiguration(SetConfiguration $parameters)
    {
      return $this->__soapCall('SetConfiguration', array($parameters));
    }

    /**
     * List supported coordinate systems including their range limitations. Therefore, the options
                MAY differ depending on whether the PTZ Configuration is assigned to a Profile containing a
                Video Source Configuration. In that case, the options may additionally contain coordinate
                systems referring to the image coordinate system described by the Video Source
                Configuration. If the PTZ Node supports continuous movements, it shall return a Timeout Range within
                which Timeouts are accepted by the PTZ Node.
     *
     * @param GetConfigurationOptions $parameters
     * @return GetConfigurationOptionsResponse
     */
    public function GetConfigurationOptions(GetConfigurationOptions $parameters)
    {
      return $this->__soapCall('GetConfigurationOptions', array($parameters));
    }

    /**
     * Operation to move the PTZ device to it's "home" position. The operation is supported if the HomeSupported element in the PTZNode is true.
     *
     * @param GotoHomePosition $parameters
     * @return GotoHomePositionResponse
     */
    public function GotoHomePosition(GotoHomePosition $parameters)
    {
      return $this->__soapCall('GotoHomePosition', array($parameters));
    }

    /**
     * Operation to save current position as the home position.
                The SetHomePosition command returns with a failure if the “home” position is fixed and
                cannot be overwritten. If the SetHomePosition is successful, it is possible to recall the
                Home Position with the GotoHomePosition command.
     *
     * @param SetHomePosition $parameters
     * @return SetHomePositionResponse
     */
    public function SetHomePosition(SetHomePosition $parameters)
    {
      return $this->__soapCall('SetHomePosition', array($parameters));
    }

    /**
     * Operation for continuous Pan/Tilt and Zoom movements. The operation is supported if the PTZNode supports at least one continuous Pan/Tilt or Zoom space. If the space argument is omitted, the default space set by the PTZConfiguration will be used.
     *
     * @param ContinuousMove $parameters
     * @return ContinuousMoveResponse
     */
    public function ContinuousMove(ContinuousMove $parameters)
    {
      return $this->__soapCall('ContinuousMove', array($parameters));
    }

    /**
     * Operation for Relative Pan/Tilt and Zoom Move. The operation is supported if the PTZNode supports at least one relative Pan/Tilt or Zoom space.
                
                The speed argument is optional. If an x/y speed value is given it is up to the device to either use
                the x value as absolute resoluting speed vector or to map x and y to the component speed.
                If the speed argument is omitted, the default speed set by the PTZConfiguration will be used.
     *
     * @param RelativeMove $parameters
     * @return RelativeMoveResponse
     */
    public function RelativeMove(RelativeMove $parameters)
    {
      return $this->__soapCall('RelativeMove', array($parameters));
    }

    /**
     * Operation to send auxiliary commands to the PTZ device
                mapped by the PTZNode in the selected profile. The
                operation is supported
                if the AuxiliarySupported element of the PTZNode is true
     *
     * @param SendAuxiliaryCommand $parameters
     * @return SendAuxiliaryCommandResponse
     */
    public function SendAuxiliaryCommand(SendAuxiliaryCommand $parameters)
    {
      return $this->__soapCall('SendAuxiliaryCommand', array($parameters));
    }

    /**
     * Operation to move pan,tilt or zoom to a absolute destination.
                
                The speed argument is optional. If an x/y speed value is given it is up to the device to either use
                the x value as absolute resoluting speed vector or to map x and y to the component speed.
                If the speed argument is omitted, the default speed set by the PTZConfiguration will be used.
     *
     * @param AbsoluteMove $parameters
     * @return AbsoluteMoveResponse
     */
    public function AbsoluteMove(AbsoluteMove $parameters)
    {
      return $this->__soapCall('AbsoluteMove', array($parameters));
    }

    /**
     * Operation to move pan,tilt or zoom to point to a destination based on the geolocation of the target.
                
                The speed argument is optional. If an x/y speed value is given it is up to the device to either use
                the x value as absolute resoluting speed vector or to map x and y to the component speed.
                If the speed argument is omitted, the default speed set by the PTZConfiguration will be used.
                The area height and area dwidth parameters are optional, they can be used independently and may be used
                by the device to automatically determine the best zoom level to show the target.
     *
     * @param GeoMove $parameters
     * @return GeoMoveResponse
     */
    public function GeoMove(GeoMove $parameters)
    {
      return $this->__soapCall('GeoMove', array($parameters));
    }

    /**
     * Operation to stop ongoing pan, tilt and zoom movements of absolute relative and continuous type.
                If no stop argument for pan, tilt or zoom is set, the device will stop all ongoing pan, tilt and zoom movements.
     *
     * @param Stop $parameters
     * @return StopResponse
     */
    public function Stop(Stop $parameters)
    {
      return $this->__soapCall('Stop', array($parameters));
    }

    /**
     * Operation to request PTZ preset tours in the selected media profiles.
     *
     * @param GetPresetTours $parameters
     * @return GetPresetToursResponse
     */
    public function GetPresetTours(GetPresetTours $parameters)
    {
      return $this->__soapCall('GetPresetTours', array($parameters));
    }

    /**
     * Operation to request a specific PTZ preset tour in the selected media profile.
     *
     * @param GetPresetTour $parameters
     * @return GetPresetTourResponse
     */
    public function GetPresetTour(GetPresetTour $parameters)
    {
      return $this->__soapCall('GetPresetTour', array($parameters));
    }

    /**
     * Operation to request available options to configure PTZ preset tour.
     *
     * @param GetPresetTourOptions $parameters
     * @return GetPresetTourOptionsResponse
     */
    public function GetPresetTourOptions(GetPresetTourOptions $parameters)
    {
      return $this->__soapCall('GetPresetTourOptions', array($parameters));
    }

    /**
     * Operation to create a preset tour for the selected media profile.
     *
     * @param CreatePresetTour $parameters
     * @return CreatePresetTourResponse
     */
    public function CreatePresetTour(CreatePresetTour $parameters)
    {
      return $this->__soapCall('CreatePresetTour', array($parameters));
    }

    /**
     * Operation to modify a preset tour for the selected media profile.
     *
     * @param ModifyPresetTour $parameters
     * @return ModifyPresetTourResponse
     */
    public function ModifyPresetTour(ModifyPresetTour $parameters)
    {
      return $this->__soapCall('ModifyPresetTour', array($parameters));
    }

    /**
     * Operation to perform specific operation on the preset tour in selected media profile.
     *
     * @param OperatePresetTour $parameters
     * @return OperatePresetTourResponse
     */
    public function OperatePresetTour(OperatePresetTour $parameters)
    {
      return $this->__soapCall('OperatePresetTour', array($parameters));
    }

    /**
     * Operation to delete a specific preset tour from the media profile.
     *
     * @param RemovePresetTour $parameters
     * @return RemovePresetTourResponse
     */
    public function RemovePresetTour(RemovePresetTour $parameters)
    {
      return $this->__soapCall('RemovePresetTour', array($parameters));
    }

    /**
     * Operation to get all available PTZConfigurations that can be added to the referenced media profile.
                
                A device providing more than one PTZConfiguration or more than one VideoSourceConfiguration or which has any other resource
                interdependency between PTZConfiguration entities and other resources listable in a media profile should implement this operation.
                PTZConfiguration entities returned by this operation shall not fail on adding them to the referenced media profile.
     *
     * @param GetCompatibleConfigurations $parameters
     * @return GetCompatibleConfigurationsResponse
     */
    public function GetCompatibleConfigurations(GetCompatibleConfigurations $parameters)
    {
      return $this->__soapCall('GetCompatibleConfigurations', array($parameters));
    }

}

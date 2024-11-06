<?php

// This file has been auto-generated by the Symfony Dependency Injection Component
// You can reference it in the "opcache.preload" php.ini setting on PHP >= 7.4 when preloading is desired

use Symfony\Component\DependencyInjection\Dumper\Preloader;

if (in_array(PHP_SAPI, ['cli', 'phpdbg', 'embed'], true)) {
    return;
}

require dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor/autoload.php';
(require __DIR__.'/App_KernelDevDebugContainer.php')->set(\ContainerGxDaGpS\App_KernelDevDebugContainer::class, null);
require __DIR__.'/ContainerGxDaGpS/EntityManagerGhost614a58f.php';
require __DIR__.'/ContainerGxDaGpS/RequestPayloadValueResolverGhost01ca9cc.php';
require __DIR__.'/ContainerGxDaGpS/getSession_Handler_NativeService.php';
require __DIR__.'/ContainerGxDaGpS/getSession_FactoryService.php';
require __DIR__.'/ContainerGxDaGpS/getServicesResetterService.php';
require __DIR__.'/ContainerGxDaGpS/getSecurity_User_Provider_Concrete_ApiUserProviderService.php';
require __DIR__.'/ContainerGxDaGpS/getSecurity_RouteLoader_LogoutService.php';
require __DIR__.'/ContainerGxDaGpS/getSecurity_PasswordHasherFactoryService.php';
require __DIR__.'/ContainerGxDaGpS/getSecurity_Logout_Listener_CsrfTokenClearingService.php';
require __DIR__.'/ContainerGxDaGpS/getSecurity_Listener_UserProviderService.php';
require __DIR__.'/ContainerGxDaGpS/getSecurity_Listener_UserChecker_LoginService.php';
require __DIR__.'/ContainerGxDaGpS/getSecurity_Listener_UserChecker_ApiService.php';
require __DIR__.'/ContainerGxDaGpS/getSecurity_Listener_PasswordMigratingService.php';
require __DIR__.'/ContainerGxDaGpS/getSecurity_Listener_CsrfProtectionService.php';
require __DIR__.'/ContainerGxDaGpS/getSecurity_Listener_CheckAuthenticatorCredentialsService.php';
require __DIR__.'/ContainerGxDaGpS/getSecurity_Listener_Api_UserProviderService.php';
require __DIR__.'/ContainerGxDaGpS/getSecurity_HttpUtilsService.php';
require __DIR__.'/ContainerGxDaGpS/getSecurity_Firewall_Map_Context_LoginService.php';
require __DIR__.'/ContainerGxDaGpS/getSecurity_Firewall_Map_Context_DevService.php';
require __DIR__.'/ContainerGxDaGpS/getSecurity_Firewall_Map_Context_ApiService.php';
require __DIR__.'/ContainerGxDaGpS/getSecurity_ChannelListenerService.php';
require __DIR__.'/ContainerGxDaGpS/getSecurity_Authenticator_Jwt_ApiService.php';
require __DIR__.'/ContainerGxDaGpS/getSecurity_Authenticator_JsonLogin_LoginService.php';
require __DIR__.'/ContainerGxDaGpS/getSecurity_AccessMapService.php';
require __DIR__.'/ContainerGxDaGpS/getSecurity_AccessListenerService.php';
require __DIR__.'/ContainerGxDaGpS/getSecrets_VaultService.php';
require __DIR__.'/ContainerGxDaGpS/getSecrets_EnvVarLoaderService.php';
require __DIR__.'/ContainerGxDaGpS/getRouting_LoaderService.php';
require __DIR__.'/ContainerGxDaGpS/getLexikJwtAuthentication_KeyLoaderService.php';
require __DIR__.'/ContainerGxDaGpS/getLexikJwtAuthentication_JwtManagerService.php';
require __DIR__.'/ContainerGxDaGpS/getLexikJwtAuthentication_EncoderService.php';
require __DIR__.'/ContainerGxDaGpS/getErrorControllerService.php';
require __DIR__.'/ContainerGxDaGpS/getDoctrine_UuidGeneratorService.php';
require __DIR__.'/ContainerGxDaGpS/getDoctrine_UlidGeneratorService.php';
require __DIR__.'/ContainerGxDaGpS/getDoctrine_Orm_Listeners_PdoSessionHandlerSchemaListenerService.php';
require __DIR__.'/ContainerGxDaGpS/getDoctrine_Orm_Listeners_LockStoreSchemaListenerService.php';
require __DIR__.'/ContainerGxDaGpS/getDoctrine_Orm_Listeners_DoctrineTokenProviderSchemaListenerService.php';
require __DIR__.'/ContainerGxDaGpS/getDoctrine_Orm_Listeners_DoctrineDbalCacheAdapterSchemaListenerService.php';
require __DIR__.'/ContainerGxDaGpS/getDoctrine_Orm_DefaultListeners_AttachEntityListenersService.php';
require __DIR__.'/ContainerGxDaGpS/getDoctrine_Orm_DefaultEntityManagerService.php';
require __DIR__.'/ContainerGxDaGpS/getDoctrine_Dbal_DefaultConnection_EventManagerService.php';
require __DIR__.'/ContainerGxDaGpS/getDoctrine_Dbal_DefaultConnectionService.php';
require __DIR__.'/ContainerGxDaGpS/getDoctrineService.php';
require __DIR__.'/ContainerGxDaGpS/getDebug_Security_Voter_VoteListenerService.php';
require __DIR__.'/ContainerGxDaGpS/getDebug_Security_Firewall_Authenticator_LoginService.php';
require __DIR__.'/ContainerGxDaGpS/getDebug_Security_Firewall_Authenticator_ApiService.php';
require __DIR__.'/ContainerGxDaGpS/getDebug_Security_EventDispatcher_LoginService.php';
require __DIR__.'/ContainerGxDaGpS/getDebug_Security_EventDispatcher_ApiService.php';
require __DIR__.'/ContainerGxDaGpS/getDebug_ErrorHandlerConfiguratorService.php';
require __DIR__.'/ContainerGxDaGpS/getContainer_GetRoutingConditionServiceService.php';
require __DIR__.'/ContainerGxDaGpS/getContainer_EnvVarProcessorsLocatorService.php';
require __DIR__.'/ContainerGxDaGpS/getContainer_EnvVarProcessorService.php';
require __DIR__.'/ContainerGxDaGpS/getCache_SystemClearerService.php';
require __DIR__.'/ContainerGxDaGpS/getCache_SystemService.php';
require __DIR__.'/ContainerGxDaGpS/getCache_SecurityIsGrantedAttributeExpressionLanguageService.php';
require __DIR__.'/ContainerGxDaGpS/getCache_SecurityIsCsrfTokenValidAttributeExpressionLanguageService.php';
require __DIR__.'/ContainerGxDaGpS/getCache_GlobalClearerService.php';
require __DIR__.'/ContainerGxDaGpS/getCache_AppClearerService.php';
require __DIR__.'/ContainerGxDaGpS/getCache_AppService.php';
require __DIR__.'/ContainerGxDaGpS/getTemplateControllerService.php';
require __DIR__.'/ContainerGxDaGpS/getRedirectControllerService.php';
require __DIR__.'/ContainerGxDaGpS/getUserRepositoryService.php';
require __DIR__.'/ContainerGxDaGpS/getModuleRepositoryService.php';
require __DIR__.'/ContainerGxDaGpS/getUserControllerService.php';
require __DIR__.'/ContainerGxDaGpS/getModuleControllerService.php';
require __DIR__.'/ContainerGxDaGpS/getModuleControllerindexService.php';
require __DIR__.'/ContainerGxDaGpS/get_ServiceLocator_QaaoWjxService.php';
require __DIR__.'/ContainerGxDaGpS/get_ServiceLocator_4wc4Ag1_KernelregisterContainerConfigurationService.php';
require __DIR__.'/ContainerGxDaGpS/get_ServiceLocator_4wc4Ag1_KernelloadRoutesService.php';
require __DIR__.'/ContainerGxDaGpS/get_ServiceLocator_4wc4Ag1Service.php';
require __DIR__.'/ContainerGxDaGpS/get_ServiceLocator_0HadkGJService.php';
require __DIR__.'/ContainerGxDaGpS/get_Security_RequestMatcher_HIZkMXBService.php';
require __DIR__.'/ContainerGxDaGpS/get_Security_RequestMatcher_GOpgIHxService.php';
require __DIR__.'/ContainerGxDaGpS/get_Security_RequestMatcher_7hdBUZ0Service.php';
require __DIR__.'/ContainerGxDaGpS/get_Debug_ValueResolver_Security_UserValueResolverService.php';
require __DIR__.'/ContainerGxDaGpS/get_Debug_ValueResolver_Security_SecurityTokenValueResolverService.php';
require __DIR__.'/ContainerGxDaGpS/get_Debug_ValueResolver_Doctrine_Orm_EntityValueResolverService.php';
require __DIR__.'/ContainerGxDaGpS/get_Debug_ValueResolver_ArgumentResolver_VariadicService.php';
require __DIR__.'/ContainerGxDaGpS/get_Debug_ValueResolver_ArgumentResolver_SessionService.php';
require __DIR__.'/ContainerGxDaGpS/get_Debug_ValueResolver_ArgumentResolver_ServiceService.php';
require __DIR__.'/ContainerGxDaGpS/get_Debug_ValueResolver_ArgumentResolver_RequestPayloadService.php';
require __DIR__.'/ContainerGxDaGpS/get_Debug_ValueResolver_ArgumentResolver_RequestAttributeService.php';
require __DIR__.'/ContainerGxDaGpS/get_Debug_ValueResolver_ArgumentResolver_RequestService.php';
require __DIR__.'/ContainerGxDaGpS/get_Debug_ValueResolver_ArgumentResolver_QueryParameterValueResolverService.php';
require __DIR__.'/ContainerGxDaGpS/get_Debug_ValueResolver_ArgumentResolver_NotTaggedControllerService.php';
require __DIR__.'/ContainerGxDaGpS/get_Debug_ValueResolver_ArgumentResolver_DefaultService.php';
require __DIR__.'/ContainerGxDaGpS/get_Debug_ValueResolver_ArgumentResolver_DatetimeService.php';
require __DIR__.'/ContainerGxDaGpS/get_Debug_ValueResolver_ArgumentResolver_BackedEnumResolverService.php';
require __DIR__.'/ContainerGxDaGpS/get_Debug_Security_Voter_Security_Access_SimpleRoleVoterService.php';
require __DIR__.'/ContainerGxDaGpS/get_Debug_Security_Voter_Security_Access_AuthenticatedVoterService.php';

$classes = [];
$classes[] = 'Symfony\Bundle\FrameworkBundle\FrameworkBundle';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\DoctrineBundle';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle';
$classes[] = 'Symfony\Bundle\MakerBundle\MakerBundle';
$classes[] = 'Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle';
$classes[] = 'Symfony\Bundle\SecurityBundle\SecurityBundle';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\LexikJWTAuthenticationBundle';
$classes[] = 'Nelmio\CorsBundle\NelmioCorsBundle';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\RoleVoter';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\BackedEnumValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DateTimeValueResolver';
$classes[] = 'Symfony\Component\Clock\Clock';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\NotTaggedControllerValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\QueryParameterValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver';
$classes[] = 'Symfony\Bridge\Doctrine\ArgumentResolver\EntityValueResolver';
$classes[] = 'Symfony\Bridge\Doctrine\Attribute\MapEntity';
$classes[] = 'Symfony\Component\Security\Http\Controller\SecurityTokenValueResolver';
$classes[] = 'Symfony\Component\Security\Http\Controller\UserValueResolver';
$classes[] = 'Symfony\Component\HttpFoundation\ChainRequestMatcher';
$classes[] = 'Symfony\Component\HttpFoundation\RequestMatcher\PathRequestMatcher';
$classes[] = 'Symfony\Component\DependencyInjection\ServiceLocator';
$classes[] = 'App\Controller\API\ModuleController';
$classes[] = 'App\Controller\API\UserController';
$classes[] = 'App\Repository\ModuleRepository';
$classes[] = 'App\Repository\UserRepository';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController';
$classes[] = 'Symfony\Component\Cache\Adapter\FilesystemAdapter';
$classes[] = 'Symfony\Component\Cache\Marshaller\DefaultMarshaller';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer';
$classes[] = 'Symfony\Component\Cache\Adapter\ArrayAdapter';
$classes[] = 'Symfony\Component\Cache\Adapter\AdapterInterface';
$classes[] = 'Symfony\Component\Cache\Adapter\AbstractAdapter';
$classes[] = 'Symfony\Component\Config\Resource\SelfCheckingResourceChecker';
$classes[] = 'Symfony\Component\DependencyInjection\EnvVarProcessor';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\CacheAttributeListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\IsCsrfTokenValidAttributeListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\IsGrantedAttributeListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DebugHandlersListener';
$classes[] = 'Symfony\Component\HttpKernel\Debug\ErrorHandlerConfigurator';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\FileLinkFormatter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AccessDecisionManager';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Strategy\AffirmativeStrategy';
$classes[] = 'Symfony\Component\EventDispatcher\Debug\TraceableEventDispatcher';
$classes[] = 'Symfony\Component\EventDispatcher\EventDispatcher';
$classes[] = 'Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallMap';
$classes[] = 'Symfony\Component\Security\Http\Logout\LogoutUrlGenerator';
$classes[] = 'Symfony\Component\Security\Http\Authenticator\Debug\TraceableAuthenticatorManagerListener';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AuthenticatorManagerListener';
$classes[] = 'Symfony\Component\Security\Http\Authentication\AuthenticatorManager';
$classes[] = 'Symfony\Bundle\SecurityBundle\EventListener\VoteListener';
$classes[] = 'Symfony\Component\Stopwatch\Stopwatch';
$classes[] = 'Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DisallowRobotsIndexingListener';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Registry';
$classes[] = 'Doctrine\DBAL\Connection';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ConnectionFactory';
$classes[] = 'Doctrine\DBAL\Configuration';
$classes[] = 'Doctrine\DBAL\Schema\LegacySchemaManagerFactory';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Middleware\DebugMiddleware';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Middleware\IdleConnectionMiddleware';
$classes[] = 'Doctrine\DBAL\Tools\DsnParser';
$classes[] = 'Symfony\Bridge\Doctrine\ContainerAwareEventManager';
$classes[] = 'Symfony\Bridge\Doctrine\Middleware\IdleConnection\Listener';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Middleware\BacktraceDebugDataHolder';
$classes[] = 'Doctrine\ORM\Mapping\Driver\AttributeDriver';
$classes[] = 'Doctrine\ORM\Proxy\Autoloader';
$classes[] = 'Doctrine\ORM\EntityManager';
$classes[] = 'Doctrine\ORM\Configuration';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\MappingDriver';
$classes[] = 'Doctrine\Persistence\Mapping\Driver\MappingDriverChain';
$classes[] = 'Doctrine\ORM\Mapping\UnderscoreNamingStrategy';
$classes[] = 'Doctrine\ORM\Mapping\DefaultQuoteStrategy';
$classes[] = 'Doctrine\ORM\Mapping\DefaultTypedFieldMapper';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ManagerConfigurator';
$classes[] = 'Doctrine\ORM\Tools\AttachEntityListenersListener';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\DoctrineDbalCacheAdapterSchemaListener';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\RememberMeTokenProviderDoctrineSchemaListener';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\LockStoreSchemaListener';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\PdoSessionHandlerSchemaListener';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UlidGenerator';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UuidGenerator';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ErrorController';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer';
$classes[] = 'Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ErrorListener';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\HttpKernelRunner';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\ResponseRunner';
$classes[] = 'Symfony\Component\Runtime\SymfonyRuntime';
$classes[] = 'Symfony\Component\HttpKernel\HttpKernel';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableControllerResolver';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory';
$classes[] = 'App\Kernel';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\Encoder\LcobucciJWTEncoder';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\Services\JWSProvider\LcobucciJWSProvider';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\Services\JWTManager';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\Services\PayloadEnrichment\ChainEnrichment';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\Services\KeyLoader\RawKeyLoader';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleAwareListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleListener';
$classes[] = 'Symfony\Component\HttpKernel\Log\Logger';
$classes[] = 'Nelmio\CorsBundle\EventListener\CacheableResponseVaryListener';
$classes[] = 'Nelmio\CorsBundle\EventListener\CorsListener';
$classes[] = 'Nelmio\CorsBundle\Options\Resolver';
$classes[] = 'Nelmio\CorsBundle\Options\ConfigProvider';
$classes[] = 'Symfony\Component\DependencyInjection\ParameterBag\ContainerBag';
$classes[] = 'Symfony\Component\HttpFoundation\RequestStack';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ResponseListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\Router';
$classes[] = 'Symfony\Component\Config\ResourceCheckerConfigCacheFactory';
$classes[] = 'Symfony\Component\Routing\RequestContext';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\RouterListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader';
$classes[] = 'Symfony\Component\Config\Loader\LoaderResolver';
$classes[] = 'Symfony\Component\Routing\Loader\XmlFileLoader';
$classes[] = 'Symfony\Component\HttpKernel\Config\FileLocator';
$classes[] = 'Symfony\Component\Routing\Loader\YamlFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\PhpFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\GlobFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\DirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\ContainerLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\AttributeRouteControllerLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AttributeDirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AttributeFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\Psr4DirectoryLoader';
$classes[] = 'Symfony\Component\DependencyInjection\StaticEnvVarLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault';
$classes[] = 'Symfony\Component\String\LazyString';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AccessListener';
$classes[] = 'Symfony\Component\Security\Http\AccessMap';
$classes[] = 'Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver';
$classes[] = 'Symfony\Component\Security\Http\Authenticator\JsonLoginAuthenticator';
$classes[] = 'Symfony\Component\Security\Http\Authentication\CustomAuthenticationSuccessHandler';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\Security\Http\Authentication\AuthenticationSuccessHandler';
$classes[] = 'Symfony\Component\Security\Http\Authentication\CustomAuthenticationFailureHandler';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\Security\Http\Authentication\AuthenticationFailureHandler';
$classes[] = 'Symfony\Component\PropertyAccess\PropertyAccessor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\Security\Authenticator\JWTAuthenticator';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\TokenExtractor\ChainTokenExtractor';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\TokenExtractor\AuthorizationHeaderTokenExtractor';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AuthorizationChecker';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ChannelListener';
$classes[] = 'Symfony\Component\Security\Csrf\CsrfTokenManager';
$classes[] = 'Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator';
$classes[] = 'Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallContext';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ExceptionListener';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallConfig';
$classes[] = 'Symfony\Component\Security\Http\HttpUtils';
$classes[] = 'Symfony\Component\Security\Http\EventListener\UserProviderListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CheckCredentialsListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CsrfProtectionListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\PasswordMigratingListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\UserCheckerListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CsrfTokenClearingLogoutListener';
$classes[] = 'Symfony\Component\PasswordHasher\Hasher\PasswordHasherFactory';
$classes[] = 'Symfony\Bundle\SecurityBundle\Routing\LogoutRouteLoader';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage';
$classes[] = 'Symfony\Bridge\Doctrine\Security\User\EntityUserProvider';
$classes[] = 'Symfony\Component\Security\Core\User\InMemoryUserChecker';
$classes[] = 'Symfony\Component\DependencyInjection\ContainerInterface';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter';
$classes[] = 'Symfony\Component\HttpFoundation\Session\SessionFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorageFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\MetadataBag';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\Handler\StrictSessionHandler';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\SessionListener';
$classes[] = 'Symfony\Component\String\Slugger\AsciiSlugger';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ValidateRequestListener';

$preloaded = Preloader::preload($classes);

$classes = [];
$classes[] = 'Symfony\\Component\\Routing\\Generator\\CompiledUrlGenerator';
$classes[] = 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableCompiledUrlMatcher';
$preloaded = Preloader::preload($classes, $preloaded);

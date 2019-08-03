<?php

namespace DasRed;

interface HttpStatusInterface {
    const ACCEPTED = 202;

    const ALREADY_REPORTED = 208;

    const BAD_GATEWAY = 502;            // RFC2518

    const BAD_REQUEST = 400;           // RFC8297

    const CONFLICT = 409;

    const CONTINUE = 100;

    const CREATED = 201;

    const EARLY_HINTS = 103;

    const EXPECTATION_FAILED = 417;

    const FAILED_DEPENDENCY = 424;

    const FORBIDDEN = 403;

    const FOUND = 302;          // RFC4918

    const GATEWAY_TIMEOUT = 504;      // RFC5842

    const GONE = 410;               // RFC3229

    const IM_USED = 226;

    const INSUFFICIENT_STORAGE = 507;

    const INTERNAL_SERVER_ERROR = 500;

    const I_AM_A_TEAPOT = 418;

    const LENGTH_REQUIRED = 411;

    const LOCKED = 423;

    const LOOP_DETECTED = 508;

    const METHOD_NOT_ALLOWED = 405;

    const MISDIRECTED_REQUEST = 421;  // RFC7238

    const MOVED_PERMANENTLY = 301;

    const MULTIPLE_CHOICES = 300;

    const MULTI_STATUS = 207;

    const NETWORK_AUTHENTICATION_REQUIRED = 511;

    const NON_AUTHORITATIVE_INFORMATION = 203;

    const NOT_ACCEPTABLE = 406;

    const NOT_EXTENDED = 510;

    const NOT_FOUND = 404;

    const NOT_IMPLEMENTED = 501;

    const NOT_MODIFIED = 304;

    const NO_CONTENT = 204;

    const OK = 200;

    const PARTIAL_CONTENT = 206;

    const PAYMENT_REQUIRED = 402;

    const PERMANENTLY_REDIRECT = 308;

    const PRECONDITION_FAILED = 412;

    const PRECONDITION_REQUIRED = 428;

    const PROCESSING = 102;

    const PROXY_AUTHENTICATION_REQUIRED = 407;                                               // RFC2324

    const REQUESTED_RANGE_NOT_SATISFIABLE = 416;                                         // RFC7540

    const REQUEST_ENTITY_TOO_LARGE = 413;                                        // RFC4918

    const REQUEST_HEADER_FIELDS_TOO_LARGE = 431;                                                      // RFC4918

    const REQUEST_TIMEOUT = 408;                                           // RFC4918

    const REQUEST_URI_TOO_LONG = 414;   // RFC2817

    const RESERVED = 306;                                                   // RFC-ietf-httpbis-replay-04

    const RESET_CONTENT = 205;                                       // RFC6585

    const SEE_OTHER = 303;                                           // RFC6585

    const SERVICE_UNAVAILABLE = 503;                             // RFC6585

    const SWITCHING_PROTOCOLS = 101;

    const TEMPORARY_REDIRECT = 307;

    const TOO_EARLY = 425;

    const TOO_MANY_REQUESTS = 429;

    const UNAUTHORIZED = 401;

    const UNAVAILABLE_FOR_LEGAL_REASONS = 451;

    const UNPROCESSABLE_ENTITY = 422;

    const UNSUPPORTED_MEDIA_TYPE = 415;                        // RFC2295

    const UPGRADE_REQUIRED = 426;                                        // RFC4918

    const USE_PROXY = 305;                                               // RFC5842

    const VARIANT_ALSO_NEGOTIATES_EXPERIMENTAL = 506;                                                // RFC2774

    const VERSION_NOT_SUPPORTED = 505;                             // RFC6585
}

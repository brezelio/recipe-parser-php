<?php

/*
 * Generated from src/Recipe.g4 by ANTLR 4.9.3
 */

namespace Brezel\Recipe\Parser {
	use Antlr\Antlr4\Runtime\Atn\ATN;
	use Antlr\Antlr4\Runtime\Atn\ATNDeserializer;
	use Antlr\Antlr4\Runtime\Atn\ParserATNSimulator;
	use Antlr\Antlr4\Runtime\Dfa\DFA;
	use Antlr\Antlr4\Runtime\Error\Exceptions\FailedPredicateException;
	use Antlr\Antlr4\Runtime\Error\Exceptions\NoViableAltException;
	use Antlr\Antlr4\Runtime\PredictionContexts\PredictionContextCache;
	use Antlr\Antlr4\Runtime\Error\Exceptions\RecognitionException;
	use Antlr\Antlr4\Runtime\RuleContext;
	use Antlr\Antlr4\Runtime\Token;
	use Antlr\Antlr4\Runtime\TokenStream;
	use Antlr\Antlr4\Runtime\Vocabulary;
	use Antlr\Antlr4\Runtime\VocabularyImpl;
	use Antlr\Antlr4\Runtime\RuntimeMetaData;
	use Antlr\Antlr4\Runtime\Parser;

	final class Recipe extends Parser
	{
		public const WS = 1, NULL = 2, BOOL = 3, MATCH = 4, DEFAULT = 5, ID = 6, 
               ALPHA = 7, INT = 8, FLOAT = 9, DIGIT = 10, OP_ADD = 11, OP_MULT = 12, 
               QUESTION = 13, POW = 14, PLUS = 15, MINUS = 16, MULT = 17, 
               DIV = 18, MODULO = 19, OP_NOT = 20, OP_CONCAT = 21, OP_EQUAL = 22, 
               OP_REL = 23, OP_SHIFT = 24, OP_BITWISE_OR = 25, OP_BITWISE_AND = 26, 
               OP_BITWISE_XOR = 27, OP_LOGICAL_OR = 28, OP_LOGICAL_AND = 29, 
               OP_COALESCE = 30, OP_SPREAD = 31, ARROW = 32, RND_BRACKET_OPEN = 33, 
               RND_BRACKET_CLOSE = 34, SQR_BRACKET_OPEN = 35, SQR_BRACKET_CLOSE = 36, 
               CURLY_BRACKET_OPEN = 37, CURLY_BRACKET_CLOSE = 38, COLON = 39, 
               COMMA = 40, DOT = 41, WILDCARD = 42, DQSTRING = 43, SQSTRING = 44, 
               STRING = 45, TemplateStringOpen = 46, TemplateStart = 47, 
               TemplateStringLiteral = 48, TemplateStringClose = 49, TEMPLATE_WS = 50, 
               TemplateEnd = 51;

		public const RULE_main = 0, RULE_expression = 1, RULE_anonymousFunction = 2, 
               RULE_arrowExpressionHead = 3, RULE_parameterListOpt = 4, 
               RULE_parameterList = 5, RULE_matchExpressionHead = 6, RULE_matchExpressionBody = 7, 
               RULE_matchEntry = 8, RULE_expressionEnumeration = 9, RULE_parentheses = 10, 
               RULE_listLiteral = 11, RULE_dictLiteral = 12, RULE_keyValues = 13, 
               RULE_spreadExpression = 14, RULE_keyValue = 15, RULE_enumeration = 16, 
               RULE_enumerationOpt = 17, RULE_variable = 18, RULE_identifier = 19, 
               RULE_literal = 20, RULE_templateString = 21, RULE_template = 22;

		/**
		 * @var array<string>
		 */
		public const RULE_NAMES = [
			'main', 'expression', 'anonymousFunction', 'arrowExpressionHead', 'parameterListOpt', 
			'parameterList', 'matchExpressionHead', 'matchExpressionBody', 'matchEntry', 
			'expressionEnumeration', 'parentheses', 'listLiteral', 'dictLiteral', 
			'keyValues', 'spreadExpression', 'keyValue', 'enumeration', 'enumerationOpt', 
			'variable', 'identifier', 'literal', 'templateString', 'template'
		];

		/**
		 * @var array<string|null>
		 */
		private const LITERAL_NAMES = [
		    null, null, "'null'", null, "'match'", "'default'", null, null, null, 
		    null, null, null, null, "'?'", "'**'", "'+'", "'-'", "'*'", "'/'", 
		    "'%'", "'!'", "'#'", null, null, null, "'|'", "'&'", "'^'", "'||'", 
		    "'&&'", "'??'", "'...'", "'=>'", "'('", "')'", "'['", "']'", "'{'", 
		    "'}'", "':'", "','", "'.'", "'[*]'", null, null, null, "'f\"'", null, 
		    null, "'\"'"
		];

		/**
		 * @var array<string>
		 */
		private const SYMBOLIC_NAMES = [
		    null, "WS", "NULL", "BOOL", "MATCH", "DEFAULT", "ID", "ALPHA", "INT", 
		    "FLOAT", "DIGIT", "OP_ADD", "OP_MULT", "QUESTION", "POW", "PLUS", 
		    "MINUS", "MULT", "DIV", "MODULO", "OP_NOT", "OP_CONCAT", "OP_EQUAL", 
		    "OP_REL", "OP_SHIFT", "OP_BITWISE_OR", "OP_BITWISE_AND", "OP_BITWISE_XOR", 
		    "OP_LOGICAL_OR", "OP_LOGICAL_AND", "OP_COALESCE", "OP_SPREAD", "ARROW", 
		    "RND_BRACKET_OPEN", "RND_BRACKET_CLOSE", "SQR_BRACKET_OPEN", "SQR_BRACKET_CLOSE", 
		    "CURLY_BRACKET_OPEN", "CURLY_BRACKET_CLOSE", "COLON", "COMMA", "DOT", 
		    "WILDCARD", "DQSTRING", "SQSTRING", "STRING", "TemplateStringOpen", 
		    "TemplateStart", "TemplateStringLiteral", "TemplateStringClose", "TEMPLATE_WS", 
		    "TemplateEnd"
		];

		/**
		 * @var string
		 */
		private const SERIALIZED_ATN =
			"\u{3}\u{608B}\u{A72A}\u{8133}\u{B9ED}\u{417C}\u{3BE7}\u{7786}\u{5964}" .
		    "\u{3}\u{35}\u{117}\u{4}\u{2}\u{9}\u{2}\u{4}\u{3}\u{9}\u{3}\u{4}\u{4}" .
		    "\u{9}\u{4}\u{4}\u{5}\u{9}\u{5}\u{4}\u{6}\u{9}\u{6}\u{4}\u{7}\u{9}" .
		    "\u{7}\u{4}\u{8}\u{9}\u{8}\u{4}\u{9}\u{9}\u{9}\u{4}\u{A}\u{9}\u{A}" .
		    "\u{4}\u{B}\u{9}\u{B}\u{4}\u{C}\u{9}\u{C}\u{4}\u{D}\u{9}\u{D}\u{4}" .
		    "\u{E}\u{9}\u{E}\u{4}\u{F}\u{9}\u{F}\u{4}\u{10}\u{9}\u{10}\u{4}\u{11}" .
		    "\u{9}\u{11}\u{4}\u{12}\u{9}\u{12}\u{4}\u{13}\u{9}\u{13}\u{4}\u{14}" .
		    "\u{9}\u{14}\u{4}\u{15}\u{9}\u{15}\u{4}\u{16}\u{9}\u{16}\u{4}\u{17}" .
		    "\u{9}\u{17}\u{4}\u{18}\u{9}\u{18}\u{3}\u{2}\u{3}\u{2}\u{3}\u{2}\u{3}" .
		    "\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}" .
		    "\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}" .
		    "\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{5}\u{3}\u{45}\u{A}\u{3}\u{3}" .
		    "\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}" .
		    "\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}" .
		    "\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}" .
		    "\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}" .
		    "\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}" .
		    "\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}" .
		    "\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}" .
		    "\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}" .
		    "\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}" .
		    "\u{3}\u{3}\u{3}\u{3}\u{3}\u{3}\u{7}\u{3}\u{85}\u{A}\u{3}\u{C}\u{3}" .
		    "\u{E}\u{3}\u{88}\u{B}\u{3}\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}\u{3}\u{4}" .
		    "\u{3}\u{5}\u{3}\u{5}\u{3}\u{5}\u{3}\u{5}\u{3}\u{5}\u{5}\u{5}\u{93}" .
		    "\u{A}\u{5}\u{3}\u{6}\u{5}\u{6}\u{96}\u{A}\u{6}\u{3}\u{7}\u{3}\u{7}" .
		    "\u{3}\u{7}\u{7}\u{7}\u{9B}\u{A}\u{7}\u{C}\u{7}\u{E}\u{7}\u{9E}\u{B}" .
		    "\u{7}\u{3}\u{8}\u{3}\u{8}\u{3}\u{8}\u{3}\u{8}\u{3}\u{9}\u{3}\u{9}" .
		    "\u{3}\u{9}\u{3}\u{9}\u{7}\u{9}\u{A8}\u{A}\u{9}\u{C}\u{9}\u{E}\u{9}" .
		    "\u{AB}\u{B}\u{9}\u{3}\u{9}\u{3}\u{9}\u{3}\u{A}\u{3}\u{A}\u{3}\u{A}" .
		    "\u{3}\u{A}\u{3}\u{A}\u{3}\u{A}\u{3}\u{A}\u{5}\u{A}\u{B6}\u{A}\u{A}" .
		    "\u{3}\u{B}\u{3}\u{B}\u{3}\u{B}\u{7}\u{B}\u{BB}\u{A}\u{B}\u{C}\u{B}" .
		    "\u{E}\u{B}\u{BE}\u{B}\u{B}\u{3}\u{C}\u{3}\u{C}\u{3}\u{C}\u{3}\u{C}" .
		    "\u{3}\u{D}\u{3}\u{D}\u{3}\u{D}\u{3}\u{D}\u{3}\u{E}\u{3}\u{E}\u{5}" .
		    "\u{E}\u{CA}\u{A}\u{E}\u{3}\u{E}\u{3}\u{E}\u{3}\u{F}\u{3}\u{F}\u{3}" .
		    "\u{F}\u{7}\u{F}\u{D1}\u{A}\u{F}\u{C}\u{F}\u{E}\u{F}\u{D4}\u{B}\u{F}" .
		    "\u{3}\u{10}\u{3}\u{10}\u{3}\u{10}\u{3}\u{11}\u{3}\u{11}\u{3}\u{11}" .
		    "\u{3}\u{11}\u{3}\u{11}\u{5}\u{11}\u{DE}\u{A}\u{11}\u{3}\u{12}\u{3}" .
		    "\u{12}\u{5}\u{12}\u{E2}\u{A}\u{12}\u{3}\u{12}\u{3}\u{12}\u{3}\u{12}" .
		    "\u{5}\u{12}\u{E7}\u{A}\u{12}\u{7}\u{12}\u{E9}\u{A}\u{12}\u{C}\u{12}" .
		    "\u{E}\u{12}\u{EC}\u{B}\u{12}\u{3}\u{13}\u{5}\u{13}\u{EF}\u{A}\u{13}" .
		    "\u{3}\u{14}\u{3}\u{14}\u{3}\u{15}\u{3}\u{15}\u{3}\u{16}\u{3}\u{16}" .
		    "\u{3}\u{16}\u{3}\u{16}\u{3}\u{16}\u{3}\u{16}\u{3}\u{16}\u{5}\u{16}" .
		    "\u{FC}\u{A}\u{16}\u{3}\u{17}\u{3}\u{17}\u{7}\u{17}\u{100}\u{A}\u{17}" .
		    "\u{C}\u{17}\u{E}\u{17}\u{103}\u{B}\u{17}\u{3}\u{17}\u{3}\u{17}\u{7}" .
		    "\u{17}\u{107}\u{A}\u{17}\u{C}\u{17}\u{E}\u{17}\u{10A}\u{B}\u{17}\u{7}" .
		    "\u{17}\u{10C}\u{A}\u{17}\u{C}\u{17}\u{E}\u{17}\u{10F}\u{B}\u{17}\u{3}" .
		    "\u{17}\u{3}\u{17}\u{3}\u{18}\u{3}\u{18}\u{3}\u{18}\u{3}\u{18}\u{3}" .
		    "\u{18}\u{2}\u{3}\u{4}\u{19}\u{2}\u{4}\u{6}\u{8}\u{A}\u{C}\u{E}\u{10}" .
		    "\u{12}\u{14}\u{16}\u{18}\u{1A}\u{1C}\u{1E}\u{20}\u{22}\u{24}\u{26}" .
		    "\u{28}\u{2A}\u{2C}\u{2E}\u{2}\u{3}\u{4}\u{2}\u{D}\u{D}\u{16}\u{16}" .
		    "\u{2}\u{12E}\u{2}\u{30}\u{3}\u{2}\u{2}\u{2}\u{4}\u{44}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{6}\u{89}\u{3}\u{2}\u{2}\u{2}\u{8}\u{92}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{A}\u{95}\u{3}\u{2}\u{2}\u{2}\u{C}\u{97}\u{3}\u{2}\u{2}\u{2}\u{E}" .
		    "\u{9F}\u{3}\u{2}\u{2}\u{2}\u{10}\u{A3}\u{3}\u{2}\u{2}\u{2}\u{12}\u{B5}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{14}\u{B7}\u{3}\u{2}\u{2}\u{2}\u{16}\u{BF}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{18}\u{C3}\u{3}\u{2}\u{2}\u{2}\u{1A}\u{C7}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{1C}\u{CD}\u{3}\u{2}\u{2}\u{2}\u{1E}\u{D5}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{20}\u{DD}\u{3}\u{2}\u{2}\u{2}\u{22}\u{E1}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{24}\u{EE}\u{3}\u{2}\u{2}\u{2}\u{26}\u{F0}\u{3}\u{2}\u{2}\u{2}\u{28}" .
		    "\u{F2}\u{3}\u{2}\u{2}\u{2}\u{2A}\u{FB}\u{3}\u{2}\u{2}\u{2}\u{2C}\u{FD}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{2E}\u{112}\u{3}\u{2}\u{2}\u{2}\u{30}\u{31}" .
		    "\u{5}\u{4}\u{3}\u{2}\u{31}\u{32}\u{7}\u{2}\u{2}\u{3}\u{32}\u{3}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{33}\u{34}\u{8}\u{3}\u{1}\u{2}\u{34}\u{45}\u{5}\u{6}" .
		    "\u{4}\u{2}\u{35}\u{36}\u{7}\u{6}\u{2}\u{2}\u{36}\u{37}\u{5}\u{E}\u{8}" .
		    "\u{2}\u{37}\u{38}\u{5}\u{10}\u{9}\u{2}\u{38}\u{45}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{39}\u{3A}\u{5}\u{28}\u{15}\u{2}\u{3A}\u{3B}\u{7}\u{23}\u{2}" .
		    "\u{2}\u{3B}\u{3C}\u{5}\u{24}\u{13}\u{2}\u{3C}\u{3D}\u{7}\u{24}\u{2}" .
		    "\u{2}\u{3D}\u{45}\u{3}\u{2}\u{2}\u{2}\u{3E}\u{3F}\u{9}\u{2}\u{2}\u{2}" .
		    "\u{3F}\u{45}\u{5}\u{4}\u{3}\u{15}\u{40}\u{45}\u{5}\u{26}\u{14}\u{2}" .
		    "\u{41}\u{45}\u{5}\u{2C}\u{17}\u{2}\u{42}\u{45}\u{5}\u{2A}\u{16}\u{2}" .
		    "\u{43}\u{45}\u{5}\u{16}\u{C}\u{2}\u{44}\u{33}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{44}\u{35}\u{3}\u{2}\u{2}\u{2}\u{44}\u{39}\u{3}\u{2}\u{2}\u{2}\u{44}" .
		    "\u{3E}\u{3}\u{2}\u{2}\u{2}\u{44}\u{40}\u{3}\u{2}\u{2}\u{2}\u{44}\u{41}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{44}\u{42}\u{3}\u{2}\u{2}\u{2}\u{44}\u{43}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{45}\u{86}\u{3}\u{2}\u{2}\u{2}\u{46}\u{47}\u{C}\u{14}" .
		    "\u{2}\u{2}\u{47}\u{48}\u{7}\u{10}\u{2}\u{2}\u{48}\u{85}\u{5}\u{4}" .
		    "\u{3}\u{14}\u{49}\u{4A}\u{C}\u{13}\u{2}\u{2}\u{4A}\u{4B}\u{7}\u{E}" .
		    "\u{2}\u{2}\u{4B}\u{85}\u{5}\u{4}\u{3}\u{14}\u{4C}\u{4D}\u{C}\u{12}" .
		    "\u{2}\u{2}\u{4D}\u{4E}\u{7}\u{D}\u{2}\u{2}\u{4E}\u{85}\u{5}\u{4}\u{3}" .
		    "\u{13}\u{4F}\u{50}\u{C}\u{11}\u{2}\u{2}\u{50}\u{51}\u{7}\u{17}\u{2}" .
		    "\u{2}\u{51}\u{85}\u{5}\u{4}\u{3}\u{12}\u{52}\u{53}\u{C}\u{10}\u{2}" .
		    "\u{2}\u{53}\u{54}\u{7}\u{20}\u{2}\u{2}\u{54}\u{85}\u{5}\u{4}\u{3}" .
		    "\u{11}\u{55}\u{56}\u{C}\u{F}\u{2}\u{2}\u{56}\u{57}\u{7}\u{1A}\u{2}" .
		    "\u{2}\u{57}\u{85}\u{5}\u{4}\u{3}\u{10}\u{58}\u{59}\u{C}\u{E}\u{2}" .
		    "\u{2}\u{59}\u{5A}\u{7}\u{19}\u{2}\u{2}\u{5A}\u{85}\u{5}\u{4}\u{3}" .
		    "\u{F}\u{5B}\u{5C}\u{C}\u{D}\u{2}\u{2}\u{5C}\u{5D}\u{7}\u{18}\u{2}" .
		    "\u{2}\u{5D}\u{85}\u{5}\u{4}\u{3}\u{E}\u{5E}\u{5F}\u{C}\u{C}\u{2}\u{2}" .
		    "\u{5F}\u{60}\u{7}\u{1C}\u{2}\u{2}\u{60}\u{85}\u{5}\u{4}\u{3}\u{D}" .
		    "\u{61}\u{62}\u{C}\u{B}\u{2}\u{2}\u{62}\u{63}\u{7}\u{1D}\u{2}\u{2}" .
		    "\u{63}\u{85}\u{5}\u{4}\u{3}\u{C}\u{64}\u{65}\u{C}\u{A}\u{2}\u{2}\u{65}" .
		    "\u{66}\u{7}\u{1B}\u{2}\u{2}\u{66}\u{85}\u{5}\u{4}\u{3}\u{B}\u{67}" .
		    "\u{68}\u{C}\u{9}\u{2}\u{2}\u{68}\u{69}\u{7}\u{1F}\u{2}\u{2}\u{69}" .
		    "\u{85}\u{5}\u{4}\u{3}\u{A}\u{6A}\u{6B}\u{C}\u{8}\u{2}\u{2}\u{6B}\u{6C}" .
		    "\u{7}\u{1E}\u{2}\u{2}\u{6C}\u{85}\u{5}\u{4}\u{3}\u{9}\u{6D}\u{6E}" .
		    "\u{C}\u{7}\u{2}\u{2}\u{6E}\u{6F}\u{7}\u{F}\u{2}\u{2}\u{6F}\u{70}\u{5}" .
		    "\u{4}\u{3}\u{2}\u{70}\u{71}\u{7}\u{29}\u{2}\u{2}\u{71}\u{72}\u{5}" .
		    "\u{4}\u{3}\u{8}\u{72}\u{85}\u{3}\u{2}\u{2}\u{2}\u{73}\u{74}\u{C}\u{1A}" .
		    "\u{2}\u{2}\u{74}\u{75}\u{7}\u{2B}\u{2}\u{2}\u{75}\u{85}\u{5}\u{28}" .
		    "\u{15}\u{2}\u{76}\u{77}\u{C}\u{19}\u{2}\u{2}\u{77}\u{78}\u{7}\u{25}" .
		    "\u{2}\u{2}\u{78}\u{79}\u{5}\u{4}\u{3}\u{2}\u{79}\u{7A}\u{7}\u{26}" .
		    "\u{2}\u{2}\u{7A}\u{85}\u{3}\u{2}\u{2}\u{2}\u{7B}\u{7C}\u{C}\u{18}" .
		    "\u{2}\u{2}\u{7C}\u{85}\u{7}\u{2C}\u{2}\u{2}\u{7D}\u{7E}\u{C}\u{17}" .
		    "\u{2}\u{2}\u{7E}\u{7F}\u{7}\u{2B}\u{2}\u{2}\u{7F}\u{80}\u{5}\u{28}" .
		    "\u{15}\u{2}\u{80}\u{81}\u{7}\u{23}\u{2}\u{2}\u{81}\u{82}\u{5}\u{24}" .
		    "\u{13}\u{2}\u{82}\u{83}\u{7}\u{24}\u{2}\u{2}\u{83}\u{85}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{84}\u{46}\u{3}\u{2}\u{2}\u{2}\u{84}\u{49}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{84}\u{4C}\u{3}\u{2}\u{2}\u{2}\u{84}\u{4F}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{84}\u{52}\u{3}\u{2}\u{2}\u{2}\u{84}\u{55}\u{3}\u{2}\u{2}\u{2}\u{84}" .
		    "\u{58}\u{3}\u{2}\u{2}\u{2}\u{84}\u{5B}\u{3}\u{2}\u{2}\u{2}\u{84}\u{5E}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{84}\u{61}\u{3}\u{2}\u{2}\u{2}\u{84}\u{64}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{84}\u{67}\u{3}\u{2}\u{2}\u{2}\u{84}\u{6A}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{84}\u{6D}\u{3}\u{2}\u{2}\u{2}\u{84}\u{73}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{84}\u{76}\u{3}\u{2}\u{2}\u{2}\u{84}\u{7B}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{84}\u{7D}\u{3}\u{2}\u{2}\u{2}\u{85}\u{88}\u{3}\u{2}\u{2}\u{2}\u{86}" .
		    "\u{84}\u{3}\u{2}\u{2}\u{2}\u{86}\u{87}\u{3}\u{2}\u{2}\u{2}\u{87}\u{5}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{88}\u{86}\u{3}\u{2}\u{2}\u{2}\u{89}\u{8A}\u{5}" .
		    "\u{8}\u{5}\u{2}\u{8A}\u{8B}\u{7}\u{22}\u{2}\u{2}\u{8B}\u{8C}\u{5}" .
		    "\u{4}\u{3}\u{2}\u{8C}\u{7}\u{3}\u{2}\u{2}\u{2}\u{8D}\u{8E}\u{7}\u{23}" .
		    "\u{2}\u{2}\u{8E}\u{8F}\u{5}\u{A}\u{6}\u{2}\u{8F}\u{90}\u{7}\u{24}" .
		    "\u{2}\u{2}\u{90}\u{93}\u{3}\u{2}\u{2}\u{2}\u{91}\u{93}\u{5}\u{28}" .
		    "\u{15}\u{2}\u{92}\u{8D}\u{3}\u{2}\u{2}\u{2}\u{92}\u{91}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{93}\u{9}\u{3}\u{2}\u{2}\u{2}\u{94}\u{96}\u{5}\u{C}\u{7}" .
		    "\u{2}\u{95}\u{94}\u{3}\u{2}\u{2}\u{2}\u{95}\u{96}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{96}\u{B}\u{3}\u{2}\u{2}\u{2}\u{97}\u{9C}\u{5}\u{28}\u{15}\u{2}" .
		    "\u{98}\u{99}\u{7}\u{2A}\u{2}\u{2}\u{99}\u{9B}\u{5}\u{28}\u{15}\u{2}" .
		    "\u{9A}\u{98}\u{3}\u{2}\u{2}\u{2}\u{9B}\u{9E}\u{3}\u{2}\u{2}\u{2}\u{9C}" .
		    "\u{9A}\u{3}\u{2}\u{2}\u{2}\u{9C}\u{9D}\u{3}\u{2}\u{2}\u{2}\u{9D}\u{D}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{9E}\u{9C}\u{3}\u{2}\u{2}\u{2}\u{9F}\u{A0}\u{7}" .
		    "\u{23}\u{2}\u{2}\u{A0}\u{A1}\u{5}\u{4}\u{3}\u{2}\u{A1}\u{A2}\u{7}" .
		    "\u{24}\u{2}\u{2}\u{A2}\u{F}\u{3}\u{2}\u{2}\u{2}\u{A3}\u{A4}\u{7}\u{27}" .
		    "\u{2}\u{2}\u{A4}\u{A9}\u{5}\u{12}\u{A}\u{2}\u{A5}\u{A6}\u{7}\u{2A}" .
		    "\u{2}\u{2}\u{A6}\u{A8}\u{5}\u{12}\u{A}\u{2}\u{A7}\u{A5}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{A8}\u{AB}\u{3}\u{2}\u{2}\u{2}\u{A9}\u{A7}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{A9}\u{AA}\u{3}\u{2}\u{2}\u{2}\u{AA}\u{AC}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{AB}\u{A9}\u{3}\u{2}\u{2}\u{2}\u{AC}\u{AD}\u{7}\u{28}\u{2}\u{2}" .
		    "\u{AD}\u{11}\u{3}\u{2}\u{2}\u{2}\u{AE}\u{AF}\u{5}\u{14}\u{B}\u{2}" .
		    "\u{AF}\u{B0}\u{7}\u{29}\u{2}\u{2}\u{B0}\u{B1}\u{5}\u{4}\u{3}\u{2}" .
		    "\u{B1}\u{B6}\u{3}\u{2}\u{2}\u{2}\u{B2}\u{B3}\u{7}\u{7}\u{2}\u{2}\u{B3}" .
		    "\u{B4}\u{7}\u{29}\u{2}\u{2}\u{B4}\u{B6}\u{5}\u{4}\u{3}\u{2}\u{B5}" .
		    "\u{AE}\u{3}\u{2}\u{2}\u{2}\u{B5}\u{B2}\u{3}\u{2}\u{2}\u{2}\u{B6}\u{13}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{B7}\u{BC}\u{5}\u{4}\u{3}\u{2}\u{B8}\u{B9}\u{7}" .
		    "\u{2A}\u{2}\u{2}\u{B9}\u{BB}\u{5}\u{4}\u{3}\u{2}\u{BA}\u{B8}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{BB}\u{BE}\u{3}\u{2}\u{2}\u{2}\u{BC}\u{BA}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{BC}\u{BD}\u{3}\u{2}\u{2}\u{2}\u{BD}\u{15}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{BE}\u{BC}\u{3}\u{2}\u{2}\u{2}\u{BF}\u{C0}\u{7}\u{23}\u{2}" .
		    "\u{2}\u{C0}\u{C1}\u{5}\u{4}\u{3}\u{2}\u{C1}\u{C2}\u{7}\u{24}\u{2}" .
		    "\u{2}\u{C2}\u{17}\u{3}\u{2}\u{2}\u{2}\u{C3}\u{C4}\u{7}\u{25}\u{2}" .
		    "\u{2}\u{C4}\u{C5}\u{5}\u{24}\u{13}\u{2}\u{C5}\u{C6}\u{7}\u{26}\u{2}" .
		    "\u{2}\u{C6}\u{19}\u{3}\u{2}\u{2}\u{2}\u{C7}\u{C9}\u{7}\u{27}\u{2}" .
		    "\u{2}\u{C8}\u{CA}\u{5}\u{1C}\u{F}\u{2}\u{C9}\u{C8}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{C9}\u{CA}\u{3}\u{2}\u{2}\u{2}\u{CA}\u{CB}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{CB}\u{CC}\u{7}\u{28}\u{2}\u{2}\u{CC}\u{1B}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{CD}\u{D2}\u{5}\u{20}\u{11}\u{2}\u{CE}\u{CF}\u{7}\u{2A}\u{2}\u{2}" .
		    "\u{CF}\u{D1}\u{5}\u{20}\u{11}\u{2}\u{D0}\u{CE}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{D1}\u{D4}\u{3}\u{2}\u{2}\u{2}\u{D2}\u{D0}\u{3}\u{2}\u{2}\u{2}\u{D2}" .
		    "\u{D3}\u{3}\u{2}\u{2}\u{2}\u{D3}\u{1D}\u{3}\u{2}\u{2}\u{2}\u{D4}\u{D2}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{D5}\u{D6}\u{7}\u{21}\u{2}\u{2}\u{D6}\u{D7}" .
		    "\u{5}\u{4}\u{3}\u{2}\u{D7}\u{1F}\u{3}\u{2}\u{2}\u{2}\u{D8}\u{D9}\u{5}" .
		    "\u{4}\u{3}\u{2}\u{D9}\u{DA}\u{7}\u{29}\u{2}\u{2}\u{DA}\u{DB}\u{5}" .
		    "\u{4}\u{3}\u{2}\u{DB}\u{DE}\u{3}\u{2}\u{2}\u{2}\u{DC}\u{DE}\u{5}\u{1E}" .
		    "\u{10}\u{2}\u{DD}\u{D8}\u{3}\u{2}\u{2}\u{2}\u{DD}\u{DC}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{DE}\u{21}\u{3}\u{2}\u{2}\u{2}\u{DF}\u{E2}\u{5}\u{1E}" .
		    "\u{10}\u{2}\u{E0}\u{E2}\u{5}\u{4}\u{3}\u{2}\u{E1}\u{DF}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{E1}\u{E0}\u{3}\u{2}\u{2}\u{2}\u{E2}\u{EA}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{E3}\u{E6}\u{7}\u{2A}\u{2}\u{2}\u{E4}\u{E7}\u{5}\u{1E}\u{10}" .
		    "\u{2}\u{E5}\u{E7}\u{5}\u{4}\u{3}\u{2}\u{E6}\u{E4}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{E6}\u{E5}\u{3}\u{2}\u{2}\u{2}\u{E7}\u{E9}\u{3}\u{2}\u{2}\u{2}\u{E8}" .
		    "\u{E3}\u{3}\u{2}\u{2}\u{2}\u{E9}\u{EC}\u{3}\u{2}\u{2}\u{2}\u{EA}\u{E8}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{EA}\u{EB}\u{3}\u{2}\u{2}\u{2}\u{EB}\u{23}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{EC}\u{EA}\u{3}\u{2}\u{2}\u{2}\u{ED}\u{EF}\u{5}\u{22}" .
		    "\u{12}\u{2}\u{EE}\u{ED}\u{3}\u{2}\u{2}\u{2}\u{EE}\u{EF}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{EF}\u{25}\u{3}\u{2}\u{2}\u{2}\u{F0}\u{F1}\u{5}\u{28}" .
		    "\u{15}\u{2}\u{F1}\u{27}\u{3}\u{2}\u{2}\u{2}\u{F2}\u{F3}\u{7}\u{8}" .
		    "\u{2}\u{2}\u{F3}\u{29}\u{3}\u{2}\u{2}\u{2}\u{F4}\u{FC}\u{5}\u{18}" .
		    "\u{D}\u{2}\u{F5}\u{FC}\u{5}\u{1A}\u{E}\u{2}\u{F6}\u{FC}\u{7}\u{2F}" .
		    "\u{2}\u{2}\u{F7}\u{FC}\u{7}\u{A}\u{2}\u{2}\u{F8}\u{FC}\u{7}\u{B}\u{2}" .
		    "\u{2}\u{F9}\u{FC}\u{7}\u{4}\u{2}\u{2}\u{FA}\u{FC}\u{7}\u{5}\u{2}\u{2}" .
		    "\u{FB}\u{F4}\u{3}\u{2}\u{2}\u{2}\u{FB}\u{F5}\u{3}\u{2}\u{2}\u{2}\u{FB}" .
		    "\u{F6}\u{3}\u{2}\u{2}\u{2}\u{FB}\u{F7}\u{3}\u{2}\u{2}\u{2}\u{FB}\u{F8}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{FB}\u{F9}\u{3}\u{2}\u{2}\u{2}\u{FB}\u{FA}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{FC}\u{2B}\u{3}\u{2}\u{2}\u{2}\u{FD}\u{101}\u{7}" .
		    "\u{30}\u{2}\u{2}\u{FE}\u{100}\u{7}\u{32}\u{2}\u{2}\u{FF}\u{FE}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{100}\u{103}\u{3}\u{2}\u{2}\u{2}\u{101}\u{FF}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{101}\u{102}\u{3}\u{2}\u{2}\u{2}\u{102}\u{10D}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{103}\u{101}\u{3}\u{2}\u{2}\u{2}\u{104}\u{108}\u{5}" .
		    "\u{2E}\u{18}\u{2}\u{105}\u{107}\u{7}\u{32}\u{2}\u{2}\u{106}\u{105}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{107}\u{10A}\u{3}\u{2}\u{2}\u{2}\u{108}\u{106}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{108}\u{109}\u{3}\u{2}\u{2}\u{2}\u{109}\u{10C}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{10A}\u{108}\u{3}\u{2}\u{2}\u{2}\u{10B}\u{104}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{10C}\u{10F}\u{3}\u{2}\u{2}\u{2}\u{10D}\u{10B}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{10D}\u{10E}\u{3}\u{2}\u{2}\u{2}\u{10E}\u{110}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{10F}\u{10D}\u{3}\u{2}\u{2}\u{2}\u{110}\u{111}" .
		    "\u{7}\u{33}\u{2}\u{2}\u{111}\u{2D}\u{3}\u{2}\u{2}\u{2}\u{112}\u{113}" .
		    "\u{7}\u{31}\u{2}\u{2}\u{113}\u{114}\u{5}\u{4}\u{3}\u{2}\u{114}\u{115}" .
		    "\u{7}\u{35}\u{2}\u{2}\u{115}\u{2F}\u{3}\u{2}\u{2}\u{2}\u{16}\u{44}" .
		    "\u{84}\u{86}\u{92}\u{95}\u{9C}\u{A9}\u{B5}\u{BC}\u{C9}\u{D2}\u{DD}" .
		    "\u{E1}\u{E6}\u{EA}\u{EE}\u{FB}\u{101}\u{108}\u{10D}";

		protected static $atn;
		protected static $decisionToDFA;
		protected static $sharedContextCache;

		public function __construct(TokenStream $input)
		{
			parent::__construct($input);

			self::initialize();

			$this->interp = new ParserATNSimulator($this, self::$atn, self::$decisionToDFA, self::$sharedContextCache);
		}

		private static function initialize() : void
		{
			if (self::$atn !== null) {
				return;
			}

			RuntimeMetaData::checkVersion('4.9.3', RuntimeMetaData::VERSION);

			$atn = (new ATNDeserializer())->deserialize(self::SERIALIZED_ATN);

			$decisionToDFA = [];
			for ($i = 0, $count = $atn->getNumberOfDecisions(); $i < $count; $i++) {
				$decisionToDFA[] = new DFA($atn->getDecisionState($i), $i);
			}

			self::$atn = $atn;
			self::$decisionToDFA = $decisionToDFA;
			self::$sharedContextCache = new PredictionContextCache();
		}

		public function getGrammarFileName() : string
		{
			return "Recipe.g4";
		}

		public function getRuleNames() : array
		{
			return self::RULE_NAMES;
		}

		public function getSerializedATN() : string
		{
			return self::SERIALIZED_ATN;
		}

		public function getATN() : ATN
		{
			return self::$atn;
		}

		public function getVocabulary() : Vocabulary
        {
            static $vocabulary;

			return $vocabulary = $vocabulary ?? new VocabularyImpl(self::LITERAL_NAMES, self::SYMBOLIC_NAMES);
        }

		/**
		 * @throws RecognitionException
		 */
		public function main() : Context\MainContext
		{
		    $localContext = new Context\MainContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 0, self::RULE_main);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(46);
		        $this->recursiveExpression(0);
		        $this->setState(47);
		        $this->match(self::EOF);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function expression() : Context\ExpressionContext
		{
			return $this->recursiveExpression(0);
		}

		/**
		 * @throws RecognitionException
		 */
		private function recursiveExpression(int $precedence) : Context\ExpressionContext
		{
			$parentContext = $this->ctx;
			$parentState = $this->getState();
			$localContext = new Context\ExpressionContext($this->ctx, $parentState);
			$previousContext = $localContext;
			$startState = 2;
			$this->enterRecursionRule($localContext, 2, self::RULE_expression, $precedence);

			try {
				$this->enterOuterAlt($localContext, 1);
				$this->setState(66);
				$this->errorHandler->sync($this);

				switch ($this->getInterpreter()->adaptivePredict($this->input, 0, $this->ctx)) {
					case 1:
					    $localContext = new Context\AnonymousFunctionExpressionContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;

					    $this->setState(50);
					    $this->anonymousFunction();
					break;

					case 2:
					    $localContext = new Context\MatchExpressionContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(51);
					    $this->match(self::MATCH);
					    $this->setState(52);
					    $this->matchExpressionHead();
					    $this->setState(53);
					    $this->matchExpressionBody();
					break;

					case 3:
					    $localContext = new Context\CallExpressionContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(55);
					    $this->identifier();
					    $this->setState(56);
					    $this->match(self::RND_BRACKET_OPEN);
					    $this->setState(57);
					    $this->enumerationOpt();
					    $this->setState(58);
					    $this->match(self::RND_BRACKET_CLOSE);
					break;

					case 4:
					    $localContext = new Context\UnaryExpressionContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(60);

					    $_la = $this->input->LA(1);

					    if (!($_la === self::OP_ADD || $_la === self::OP_NOT)) {
					    $this->errorHandler->recoverInline($this);
					    } else {
					    	if ($this->input->LA(1) === Token::EOF) {
					    	    $this->matchedEOF = true;
					        }

					    	$this->errorHandler->reportMatch($this);
					    	$this->consume();
					    }
					    $this->setState(61);
					    $this->recursiveExpression(19);
					break;

					case 5:
					    $localContext = new Context\VariableExpressionContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(62);
					    $this->variable();
					break;

					case 6:
					    $localContext = new Context\TemplateStringExpressionContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(63);
					    $this->templateString();
					break;

					case 7:
					    $localContext = new Context\LiteralExpressionContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(64);
					    $this->literal();
					break;

					case 8:
					    $localContext = new Context\ParenthesizedExpressionContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(65);
					    $this->parentheses();
					break;
				}
				$this->ctx->stop = $this->input->LT(-1);
				$this->setState(132);
				$this->errorHandler->sync($this);

				$alt = $this->getInterpreter()->adaptivePredict($this->input, 2, $this->ctx);

				while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
					if ($alt === 1) {
						if ($this->getParseListeners() !== null) {
						    $this->triggerExitRuleEvent();
						}

						$previousContext = $localContext;
						$this->setState(130);
						$this->errorHandler->sync($this);

						switch ($this->getInterpreter()->adaptivePredict($this->input, 1, $this->ctx)) {
							case 1:
							    $localContext = new Context\PowerExpressionContext(new Context\ExpressionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(68);

							    if (!($this->precpred($this->ctx, 18))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 18)");
							    }
							    $this->setState(69);
							    $this->match(self::POW);
							    $this->setState(70);
							    $this->recursiveExpression(18);
							break;

							case 2:
							    $localContext = new Context\MultExpressionContext(new Context\ExpressionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(71);

							    if (!($this->precpred($this->ctx, 17))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 17)");
							    }
							    $this->setState(72);
							    $this->match(self::OP_MULT);
							    $this->setState(73);
							    $this->recursiveExpression(18);
							break;

							case 3:
							    $localContext = new Context\AddExpressionContext(new Context\ExpressionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(74);

							    if (!($this->precpred($this->ctx, 16))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 16)");
							    }
							    $this->setState(75);
							    $this->match(self::OP_ADD);
							    $this->setState(76);
							    $this->recursiveExpression(17);
							break;

							case 4:
							    $localContext = new Context\ConcatExpressionContext(new Context\ExpressionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(77);

							    if (!($this->precpred($this->ctx, 15))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 15)");
							    }
							    $this->setState(78);
							    $this->match(self::OP_CONCAT);
							    $this->setState(79);
							    $this->recursiveExpression(16);
							break;

							case 5:
							    $localContext = new Context\CoalescingExpressionContext(new Context\ExpressionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(80);

							    if (!($this->precpred($this->ctx, 14))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 14)");
							    }
							    $this->setState(81);
							    $this->match(self::OP_COALESCE);
							    $this->setState(82);
							    $this->recursiveExpression(15);
							break;

							case 6:
							    $localContext = new Context\ShiftExpressionContext(new Context\ExpressionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(83);

							    if (!($this->precpred($this->ctx, 13))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 13)");
							    }
							    $this->setState(84);
							    $this->match(self::OP_SHIFT);
							    $this->setState(85);
							    $this->recursiveExpression(14);
							break;

							case 7:
							    $localContext = new Context\RelationalExpressionContext(new Context\ExpressionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(86);

							    if (!($this->precpred($this->ctx, 12))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 12)");
							    }
							    $this->setState(87);
							    $this->match(self::OP_REL);
							    $this->setState(88);
							    $this->recursiveExpression(13);
							break;

							case 8:
							    $localContext = new Context\EqualityExpressionContext(new Context\ExpressionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(89);

							    if (!($this->precpred($this->ctx, 11))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 11)");
							    }
							    $this->setState(90);
							    $this->match(self::OP_EQUAL);
							    $this->setState(91);
							    $this->recursiveExpression(12);
							break;

							case 9:
							    $localContext = new Context\BitwiseAndExpressionContext(new Context\ExpressionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(92);

							    if (!($this->precpred($this->ctx, 10))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 10)");
							    }
							    $this->setState(93);
							    $this->match(self::OP_BITWISE_AND);
							    $this->setState(94);
							    $this->recursiveExpression(11);
							break;

							case 10:
							    $localContext = new Context\BitwiseXorExpressionContext(new Context\ExpressionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(95);

							    if (!($this->precpred($this->ctx, 9))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 9)");
							    }
							    $this->setState(96);
							    $this->match(self::OP_BITWISE_XOR);
							    $this->setState(97);
							    $this->recursiveExpression(10);
							break;

							case 11:
							    $localContext = new Context\BitwiseOrExpressionContext(new Context\ExpressionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(98);

							    if (!($this->precpred($this->ctx, 8))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 8)");
							    }
							    $this->setState(99);
							    $this->match(self::OP_BITWISE_OR);
							    $this->setState(100);
							    $this->recursiveExpression(9);
							break;

							case 12:
							    $localContext = new Context\AndExpressionContext(new Context\ExpressionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(101);

							    if (!($this->precpred($this->ctx, 7))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 7)");
							    }
							    $this->setState(102);
							    $this->match(self::OP_LOGICAL_AND);
							    $this->setState(103);
							    $this->recursiveExpression(8);
							break;

							case 13:
							    $localContext = new Context\OrExpressionContext(new Context\ExpressionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(104);

							    if (!($this->precpred($this->ctx, 6))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 6)");
							    }
							    $this->setState(105);
							    $this->match(self::OP_LOGICAL_OR);
							    $this->setState(106);
							    $this->recursiveExpression(7);
							break;

							case 14:
							    $localContext = new Context\ConditionalExpressionContext(new Context\ExpressionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(107);

							    if (!($this->precpred($this->ctx, 5))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 5)");
							    }
							    $this->setState(108);
							    $this->match(self::QUESTION);
							    $this->setState(109);
							    $this->recursiveExpression(0);
							    $this->setState(110);
							    $this->match(self::COLON);
							    $this->setState(111);
							    $this->recursiveExpression(6);
							break;

							case 15:
							    $localContext = new Context\MemberExpressionContext(new Context\ExpressionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(113);

							    if (!($this->precpred($this->ctx, 24))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 24)");
							    }
							    $this->setState(114);
							    $this->match(self::DOT);
							    $this->setState(115);
							    $this->identifier();
							break;

							case 16:
							    $localContext = new Context\SubscriptExpressionContext(new Context\ExpressionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(116);

							    if (!($this->precpred($this->ctx, 23))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 23)");
							    }
							    $this->setState(117);
							    $this->match(self::SQR_BRACKET_OPEN);
							    $this->setState(118);
							    $this->recursiveExpression(0);
							    $this->setState(119);
							    $this->match(self::SQR_BRACKET_CLOSE);
							break;

							case 17:
							    $localContext = new Context\WildcardExpressionContext(new Context\ExpressionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(121);

							    if (!($this->precpred($this->ctx, 22))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 22)");
							    }
							    $this->setState(122);
							    $this->match(self::WILDCARD);
							break;

							case 18:
							    $localContext = new Context\MethodExpressionContext(new Context\ExpressionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
							    $this->setState(123);

							    if (!($this->precpred($this->ctx, 21))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 21)");
							    }
							    $this->setState(124);
							    $this->match(self::DOT);
							    $this->setState(125);
							    $this->identifier();
							    $this->setState(126);
							    $this->match(self::RND_BRACKET_OPEN);
							    $this->setState(127);
							    $this->enumerationOpt();
							    $this->setState(128);
							    $this->match(self::RND_BRACKET_CLOSE);
							break;
						} 
					}

					$this->setState(134);
					$this->errorHandler->sync($this);

					$alt = $this->getInterpreter()->adaptivePredict($this->input, 2, $this->ctx);
				}
			} catch (RecognitionException $exception) {
				$localContext->exception = $exception;
				$this->errorHandler->reportError($this, $exception);
				$this->errorHandler->recover($this, $exception);
			} finally {
				$this->unrollRecursionContexts($parentContext);
			}

			return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function anonymousFunction() : Context\AnonymousFunctionContext
		{
		    $localContext = new Context\AnonymousFunctionContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 4, self::RULE_anonymousFunction);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(135);
		        $this->arrowExpressionHead();
		        $this->setState(136);
		        $this->match(self::ARROW);
		        $this->setState(137);
		        $this->recursiveExpression(0);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function arrowExpressionHead() : Context\ArrowExpressionHeadContext
		{
		    $localContext = new Context\ArrowExpressionHeadContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 6, self::RULE_arrowExpressionHead);

		    try {
		        $this->setState(144);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::RND_BRACKET_OPEN:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(139);
		            	$this->match(self::RND_BRACKET_OPEN);
		            	$this->setState(140);
		            	$this->parameterListOpt();
		            	$this->setState(141);
		            	$this->match(self::RND_BRACKET_CLOSE);
		            	break;

		            case self::ID:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(143);
		            	$this->identifier();
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function parameterListOpt() : Context\ParameterListOptContext
		{
		    $localContext = new Context\ParameterListOptContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 8, self::RULE_parameterListOpt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(147);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::ID) {
		        	$this->setState(146);
		        	$this->parameterList();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function parameterList() : Context\ParameterListContext
		{
		    $localContext = new Context\ParameterListContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 10, self::RULE_parameterList);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(149);
		        $this->identifier();
		        $this->setState(154);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::COMMA) {
		        	$this->setState(150);
		        	$this->match(self::COMMA);
		        	$this->setState(151);
		        	$this->identifier();
		        	$this->setState(156);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function matchExpressionHead() : Context\MatchExpressionHeadContext
		{
		    $localContext = new Context\MatchExpressionHeadContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 12, self::RULE_matchExpressionHead);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(157);
		        $this->match(self::RND_BRACKET_OPEN);
		        $this->setState(158);
		        $this->recursiveExpression(0);
		        $this->setState(159);
		        $this->match(self::RND_BRACKET_CLOSE);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function matchExpressionBody() : Context\MatchExpressionBodyContext
		{
		    $localContext = new Context\MatchExpressionBodyContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 14, self::RULE_matchExpressionBody);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(161);
		        $this->match(self::CURLY_BRACKET_OPEN);
		        $this->setState(162);
		        $this->matchEntry();
		        $this->setState(167);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::COMMA) {
		        	$this->setState(163);
		        	$this->match(self::COMMA);
		        	$this->setState(164);
		        	$this->matchEntry();
		        	$this->setState(169);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(170);
		        $this->match(self::CURLY_BRACKET_CLOSE);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function matchEntry() : Context\MatchEntryContext
		{
		    $localContext = new Context\MatchEntryContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 16, self::RULE_matchEntry);

		    try {
		        $this->setState(179);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::NULL:
		            case self::BOOL:
		            case self::MATCH:
		            case self::ID:
		            case self::INT:
		            case self::FLOAT:
		            case self::OP_ADD:
		            case self::OP_NOT:
		            case self::RND_BRACKET_OPEN:
		            case self::SQR_BRACKET_OPEN:
		            case self::CURLY_BRACKET_OPEN:
		            case self::STRING:
		            case self::TemplateStringOpen:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(172);
		            	$this->expressionEnumeration();
		            	$this->setState(173);
		            	$this->match(self::COLON);
		            	$this->setState(174);
		            	$this->recursiveExpression(0);
		            	break;

		            case self::DEFAULT:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(176);
		            	$this->match(self::DEFAULT);
		            	$this->setState(177);
		            	$this->match(self::COLON);
		            	$this->setState(178);
		            	$this->recursiveExpression(0);
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function expressionEnumeration() : Context\ExpressionEnumerationContext
		{
		    $localContext = new Context\ExpressionEnumerationContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 18, self::RULE_expressionEnumeration);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(181);
		        $this->recursiveExpression(0);
		        $this->setState(186);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::COMMA) {
		        	$this->setState(182);
		        	$this->match(self::COMMA);
		        	$this->setState(183);
		        	$this->recursiveExpression(0);
		        	$this->setState(188);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function parentheses() : Context\ParenthesesContext
		{
		    $localContext = new Context\ParenthesesContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 20, self::RULE_parentheses);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(189);
		        $this->match(self::RND_BRACKET_OPEN);
		        $this->setState(190);
		        $this->recursiveExpression(0);
		        $this->setState(191);
		        $this->match(self::RND_BRACKET_CLOSE);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function listLiteral() : Context\ListLiteralContext
		{
		    $localContext = new Context\ListLiteralContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 22, self::RULE_listLiteral);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(193);
		        $this->match(self::SQR_BRACKET_OPEN);
		        $this->setState(194);
		        $this->enumerationOpt();
		        $this->setState(195);
		        $this->match(self::SQR_BRACKET_CLOSE);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function dictLiteral() : Context\DictLiteralContext
		{
		    $localContext = new Context\DictLiteralContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 24, self::RULE_dictLiteral);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(197);
		        $this->match(self::CURLY_BRACKET_OPEN);
		        $this->setState(199);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & ((1 << self::NULL) | (1 << self::BOOL) | (1 << self::MATCH) | (1 << self::ID) | (1 << self::INT) | (1 << self::FLOAT) | (1 << self::OP_ADD) | (1 << self::OP_NOT) | (1 << self::OP_SPREAD) | (1 << self::RND_BRACKET_OPEN) | (1 << self::SQR_BRACKET_OPEN) | (1 << self::CURLY_BRACKET_OPEN) | (1 << self::STRING) | (1 << self::TemplateStringOpen))) !== 0)) {
		        	$this->setState(198);
		        	$this->keyValues();
		        }
		        $this->setState(201);
		        $this->match(self::CURLY_BRACKET_CLOSE);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function keyValues() : Context\KeyValuesContext
		{
		    $localContext = new Context\KeyValuesContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 26, self::RULE_keyValues);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(203);
		        $this->keyValue();
		        $this->setState(208);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::COMMA) {
		        	$this->setState(204);
		        	$this->match(self::COMMA);
		        	$this->setState(205);
		        	$this->keyValue();
		        	$this->setState(210);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function spreadExpression() : Context\SpreadExpressionContext
		{
		    $localContext = new Context\SpreadExpressionContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 28, self::RULE_spreadExpression);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(211);
		        $this->match(self::OP_SPREAD);
		        $this->setState(212);
		        $this->recursiveExpression(0);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function keyValue() : Context\KeyValueContext
		{
		    $localContext = new Context\KeyValueContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 30, self::RULE_keyValue);

		    try {
		        $this->setState(219);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::NULL:
		            case self::BOOL:
		            case self::MATCH:
		            case self::ID:
		            case self::INT:
		            case self::FLOAT:
		            case self::OP_ADD:
		            case self::OP_NOT:
		            case self::RND_BRACKET_OPEN:
		            case self::SQR_BRACKET_OPEN:
		            case self::CURLY_BRACKET_OPEN:
		            case self::STRING:
		            case self::TemplateStringOpen:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(214);
		            	$this->recursiveExpression(0);
		            	$this->setState(215);
		            	$this->match(self::COLON);
		            	$this->setState(216);
		            	$this->recursiveExpression(0);
		            	break;

		            case self::OP_SPREAD:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(218);
		            	$this->spreadExpression();
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function enumeration() : Context\EnumerationContext
		{
		    $localContext = new Context\EnumerationContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 32, self::RULE_enumeration);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(223);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::OP_SPREAD:
		            	$this->setState(221);
		            	$this->spreadExpression();
		            	break;

		            case self::NULL:
		            case self::BOOL:
		            case self::MATCH:
		            case self::ID:
		            case self::INT:
		            case self::FLOAT:
		            case self::OP_ADD:
		            case self::OP_NOT:
		            case self::RND_BRACKET_OPEN:
		            case self::SQR_BRACKET_OPEN:
		            case self::CURLY_BRACKET_OPEN:
		            case self::STRING:
		            case self::TemplateStringOpen:
		            	$this->setState(222);
		            	$this->recursiveExpression(0);
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		        $this->setState(232);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::COMMA) {
		        	$this->setState(225);
		        	$this->match(self::COMMA);
		        	$this->setState(228);
		        	$this->errorHandler->sync($this);

		        	switch ($this->input->LA(1)) {
		        	    case self::OP_SPREAD:
		        	    	$this->setState(226);
		        	    	$this->spreadExpression();
		        	    	break;

		        	    case self::NULL:
		        	    case self::BOOL:
		        	    case self::MATCH:
		        	    case self::ID:
		        	    case self::INT:
		        	    case self::FLOAT:
		        	    case self::OP_ADD:
		        	    case self::OP_NOT:
		        	    case self::RND_BRACKET_OPEN:
		        	    case self::SQR_BRACKET_OPEN:
		        	    case self::CURLY_BRACKET_OPEN:
		        	    case self::STRING:
		        	    case self::TemplateStringOpen:
		        	    	$this->setState(227);
		        	    	$this->recursiveExpression(0);
		        	    	break;

		        	default:
		        		throw new NoViableAltException($this);
		        	}
		        	$this->setState(234);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function enumerationOpt() : Context\EnumerationOptContext
		{
		    $localContext = new Context\EnumerationOptContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 34, self::RULE_enumerationOpt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(236);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & ((1 << self::NULL) | (1 << self::BOOL) | (1 << self::MATCH) | (1 << self::ID) | (1 << self::INT) | (1 << self::FLOAT) | (1 << self::OP_ADD) | (1 << self::OP_NOT) | (1 << self::OP_SPREAD) | (1 << self::RND_BRACKET_OPEN) | (1 << self::SQR_BRACKET_OPEN) | (1 << self::CURLY_BRACKET_OPEN) | (1 << self::STRING) | (1 << self::TemplateStringOpen))) !== 0)) {
		        	$this->setState(235);
		        	$this->enumeration();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function variable() : Context\VariableContext
		{
		    $localContext = new Context\VariableContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 36, self::RULE_variable);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(238);
		        $this->identifier();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function identifier() : Context\IdentifierContext
		{
		    $localContext = new Context\IdentifierContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 38, self::RULE_identifier);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(240);
		        $this->match(self::ID);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function literal() : Context\LiteralContext
		{
		    $localContext = new Context\LiteralContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 40, self::RULE_literal);

		    try {
		        $this->setState(249);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::SQR_BRACKET_OPEN:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(242);
		            	$this->listLiteral();
		            	break;

		            case self::CURLY_BRACKET_OPEN:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(243);
		            	$this->dictLiteral();
		            	break;

		            case self::STRING:
		            	$this->enterOuterAlt($localContext, 3);
		            	$this->setState(244);
		            	$this->match(self::STRING);
		            	break;

		            case self::INT:
		            	$this->enterOuterAlt($localContext, 4);
		            	$this->setState(245);
		            	$this->match(self::INT);
		            	break;

		            case self::FLOAT:
		            	$this->enterOuterAlt($localContext, 5);
		            	$this->setState(246);
		            	$this->match(self::FLOAT);
		            	break;

		            case self::NULL:
		            	$this->enterOuterAlt($localContext, 6);
		            	$this->setState(247);
		            	$this->match(self::NULL);
		            	break;

		            case self::BOOL:
		            	$this->enterOuterAlt($localContext, 7);
		            	$this->setState(248);
		            	$this->match(self::BOOL);
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function templateString() : Context\TemplateStringContext
		{
		    $localContext = new Context\TemplateStringContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 42, self::RULE_templateString);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(251);
		        $this->match(self::TemplateStringOpen);
		        $this->setState(255);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::TemplateStringLiteral) {
		        	$this->setState(252);
		        	$this->match(self::TemplateStringLiteral);
		        	$this->setState(257);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(267);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::TemplateStart) {
		        	$this->setState(258);
		        	$this->template();
		        	$this->setState(262);
		        	$this->errorHandler->sync($this);

		        	$_la = $this->input->LA(1);
		        	while ($_la === self::TemplateStringLiteral) {
		        		$this->setState(259);
		        		$this->match(self::TemplateStringLiteral);
		        		$this->setState(264);
		        		$this->errorHandler->sync($this);
		        		$_la = $this->input->LA(1);
		        	}
		        	$this->setState(269);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(270);
		        $this->match(self::TemplateStringClose);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function template() : Context\TemplateContext
		{
		    $localContext = new Context\TemplateContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 44, self::RULE_template);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(272);
		        $this->match(self::TemplateStart);
		        $this->setState(273);
		        $this->recursiveExpression(0);
		        $this->setState(274);
		        $this->match(self::TemplateEnd);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		public function sempred(?RuleContext $localContext, int $ruleIndex, int $predicateIndex) : bool
		{
			switch ($ruleIndex) {
					case 1:
						return $this->sempredExpression($localContext, $predicateIndex);

				default:
					return true;
				}
		}

		private function sempredExpression(?Context\ExpressionContext $localContext, int $predicateIndex) : bool
		{
			switch ($predicateIndex) {
			    case 0:
			        return $this->precpred($this->ctx, 18);

			    case 1:
			        return $this->precpred($this->ctx, 17);

			    case 2:
			        return $this->precpred($this->ctx, 16);

			    case 3:
			        return $this->precpred($this->ctx, 15);

			    case 4:
			        return $this->precpred($this->ctx, 14);

			    case 5:
			        return $this->precpred($this->ctx, 13);

			    case 6:
			        return $this->precpred($this->ctx, 12);

			    case 7:
			        return $this->precpred($this->ctx, 11);

			    case 8:
			        return $this->precpred($this->ctx, 10);

			    case 9:
			        return $this->precpred($this->ctx, 9);

			    case 10:
			        return $this->precpred($this->ctx, 8);

			    case 11:
			        return $this->precpred($this->ctx, 7);

			    case 12:
			        return $this->precpred($this->ctx, 6);

			    case 13:
			        return $this->precpred($this->ctx, 5);

			    case 14:
			        return $this->precpred($this->ctx, 24);

			    case 15:
			        return $this->precpred($this->ctx, 23);

			    case 16:
			        return $this->precpred($this->ctx, 22);

			    case 17:
			        return $this->precpred($this->ctx, 21);
			}

			return true;
		}
	}
}

namespace Brezel\Recipe\Parser\Context {
	use Antlr\Antlr4\Runtime\ParserRuleContext;
	use Antlr\Antlr4\Runtime\Token;
	use Antlr\Antlr4\Runtime\Tree\ParseTreeVisitor;
	use Antlr\Antlr4\Runtime\Tree\TerminalNode;
	use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
	use Brezel\Recipe\Parser\Recipe;
	use Brezel\Recipe\Parser\RecipeVisitor;
	use Brezel\Recipe\Parser\RecipeListener;

	class MainContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return Recipe::RULE_main;
	    }

	    public function expression() : ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    public function EOF() : ?TerminalNode
	    {
	        return $this->getToken(Recipe::EOF, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->enterMain($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->exitMain($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof RecipeVisitor) {
			    return $visitor->visitMain($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ExpressionContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return Recipe::RULE_expression;
	    }
	 
		public function copyFrom(ParserRuleContext $context) : void
		{
			parent::copyFrom($context);

		}
	}

	class TemplateStringExpressionContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function templateString() : ?TemplateStringContext
	    {
	    	return $this->getTypedRuleContext(TemplateStringContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->enterTemplateStringExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->exitTemplateStringExpression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof RecipeVisitor) {
			    return $visitor->visitTemplateStringExpression($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class PowerExpressionContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

	    public function POW() : ?TerminalNode
	    {
	        return $this->getToken(Recipe::POW, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->enterPowerExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->exitPowerExpression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof RecipeVisitor) {
			    return $visitor->visitPowerExpression($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class BitwiseXorExpressionContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

	    public function OP_BITWISE_XOR() : ?TerminalNode
	    {
	        return $this->getToken(Recipe::OP_BITWISE_XOR, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->enterBitwiseXorExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->exitBitwiseXorExpression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof RecipeVisitor) {
			    return $visitor->visitBitwiseXorExpression($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class UnaryExpressionContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function expression() : ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    public function OP_NOT() : ?TerminalNode
	    {
	        return $this->getToken(Recipe::OP_NOT, 0);
	    }

	    public function OP_ADD() : ?TerminalNode
	    {
	        return $this->getToken(Recipe::OP_ADD, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->enterUnaryExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->exitUnaryExpression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof RecipeVisitor) {
			    return $visitor->visitUnaryExpression($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class OrExpressionContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

	    public function OP_LOGICAL_OR() : ?TerminalNode
	    {
	        return $this->getToken(Recipe::OP_LOGICAL_OR, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->enterOrExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->exitOrExpression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof RecipeVisitor) {
			    return $visitor->visitOrExpression($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class MatchExpressionContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function MATCH() : ?TerminalNode
	    {
	        return $this->getToken(Recipe::MATCH, 0);
	    }

	    public function matchExpressionHead() : ?MatchExpressionHeadContext
	    {
	    	return $this->getTypedRuleContext(MatchExpressionHeadContext::class, 0);
	    }

	    public function matchExpressionBody() : ?MatchExpressionBodyContext
	    {
	    	return $this->getTypedRuleContext(MatchExpressionBodyContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->enterMatchExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->exitMatchExpression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof RecipeVisitor) {
			    return $visitor->visitMatchExpression($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class CoalescingExpressionContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

	    public function OP_COALESCE() : ?TerminalNode
	    {
	        return $this->getToken(Recipe::OP_COALESCE, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->enterCoalescingExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->exitCoalescingExpression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof RecipeVisitor) {
			    return $visitor->visitCoalescingExpression($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class AnonymousFunctionExpressionContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function anonymousFunction() : ?AnonymousFunctionContext
	    {
	    	return $this->getTypedRuleContext(AnonymousFunctionContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->enterAnonymousFunctionExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->exitAnonymousFunctionExpression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof RecipeVisitor) {
			    return $visitor->visitAnonymousFunctionExpression($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class AndExpressionContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

	    public function OP_LOGICAL_AND() : ?TerminalNode
	    {
	        return $this->getToken(Recipe::OP_LOGICAL_AND, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->enterAndExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->exitAndExpression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof RecipeVisitor) {
			    return $visitor->visitAndExpression($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class SubscriptExpressionContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

	    public function SQR_BRACKET_OPEN() : ?TerminalNode
	    {
	        return $this->getToken(Recipe::SQR_BRACKET_OPEN, 0);
	    }

	    public function SQR_BRACKET_CLOSE() : ?TerminalNode
	    {
	        return $this->getToken(Recipe::SQR_BRACKET_CLOSE, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->enterSubscriptExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->exitSubscriptExpression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof RecipeVisitor) {
			    return $visitor->visitSubscriptExpression($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class WildcardExpressionContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function expression() : ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    public function WILDCARD() : ?TerminalNode
	    {
	        return $this->getToken(Recipe::WILDCARD, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->enterWildcardExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->exitWildcardExpression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof RecipeVisitor) {
			    return $visitor->visitWildcardExpression($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class EqualityExpressionContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

	    public function OP_EQUAL() : ?TerminalNode
	    {
	        return $this->getToken(Recipe::OP_EQUAL, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->enterEqualityExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->exitEqualityExpression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof RecipeVisitor) {
			    return $visitor->visitEqualityExpression($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class CallExpressionContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function identifier() : ?IdentifierContext
	    {
	    	return $this->getTypedRuleContext(IdentifierContext::class, 0);
	    }

	    public function RND_BRACKET_OPEN() : ?TerminalNode
	    {
	        return $this->getToken(Recipe::RND_BRACKET_OPEN, 0);
	    }

	    public function enumerationOpt() : ?EnumerationOptContext
	    {
	    	return $this->getTypedRuleContext(EnumerationOptContext::class, 0);
	    }

	    public function RND_BRACKET_CLOSE() : ?TerminalNode
	    {
	        return $this->getToken(Recipe::RND_BRACKET_CLOSE, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->enterCallExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->exitCallExpression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof RecipeVisitor) {
			    return $visitor->visitCallExpression($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class BitwiseOrExpressionContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

	    public function OP_BITWISE_OR() : ?TerminalNode
	    {
	        return $this->getToken(Recipe::OP_BITWISE_OR, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->enterBitwiseOrExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->exitBitwiseOrExpression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof RecipeVisitor) {
			    return $visitor->visitBitwiseOrExpression($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ParenthesizedExpressionContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function parentheses() : ?ParenthesesContext
	    {
	    	return $this->getTypedRuleContext(ParenthesesContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->enterParenthesizedExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->exitParenthesizedExpression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof RecipeVisitor) {
			    return $visitor->visitParenthesizedExpression($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class RelationalExpressionContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

	    public function OP_REL() : ?TerminalNode
	    {
	        return $this->getToken(Recipe::OP_REL, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->enterRelationalExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->exitRelationalExpression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof RecipeVisitor) {
			    return $visitor->visitRelationalExpression($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class LiteralExpressionContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function literal() : ?LiteralContext
	    {
	    	return $this->getTypedRuleContext(LiteralContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->enterLiteralExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->exitLiteralExpression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof RecipeVisitor) {
			    return $visitor->visitLiteralExpression($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ConditionalExpressionContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

	    public function QUESTION() : ?TerminalNode
	    {
	        return $this->getToken(Recipe::QUESTION, 0);
	    }

	    public function COLON() : ?TerminalNode
	    {
	        return $this->getToken(Recipe::COLON, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->enterConditionalExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->exitConditionalExpression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof RecipeVisitor) {
			    return $visitor->visitConditionalExpression($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class VariableExpressionContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function variable() : ?VariableContext
	    {
	    	return $this->getTypedRuleContext(VariableContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->enterVariableExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->exitVariableExpression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof RecipeVisitor) {
			    return $visitor->visitVariableExpression($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ConcatExpressionContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

	    public function OP_CONCAT() : ?TerminalNode
	    {
	        return $this->getToken(Recipe::OP_CONCAT, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->enterConcatExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->exitConcatExpression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof RecipeVisitor) {
			    return $visitor->visitConcatExpression($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ShiftExpressionContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

	    public function OP_SHIFT() : ?TerminalNode
	    {
	        return $this->getToken(Recipe::OP_SHIFT, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->enterShiftExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->exitShiftExpression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof RecipeVisitor) {
			    return $visitor->visitShiftExpression($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class MethodExpressionContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function expression() : ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    public function DOT() : ?TerminalNode
	    {
	        return $this->getToken(Recipe::DOT, 0);
	    }

	    public function identifier() : ?IdentifierContext
	    {
	    	return $this->getTypedRuleContext(IdentifierContext::class, 0);
	    }

	    public function RND_BRACKET_OPEN() : ?TerminalNode
	    {
	        return $this->getToken(Recipe::RND_BRACKET_OPEN, 0);
	    }

	    public function enumerationOpt() : ?EnumerationOptContext
	    {
	    	return $this->getTypedRuleContext(EnumerationOptContext::class, 0);
	    }

	    public function RND_BRACKET_CLOSE() : ?TerminalNode
	    {
	        return $this->getToken(Recipe::RND_BRACKET_CLOSE, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->enterMethodExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->exitMethodExpression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof RecipeVisitor) {
			    return $visitor->visitMethodExpression($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class BitwiseAndExpressionContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

	    public function OP_BITWISE_AND() : ?TerminalNode
	    {
	        return $this->getToken(Recipe::OP_BITWISE_AND, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->enterBitwiseAndExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->exitBitwiseAndExpression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof RecipeVisitor) {
			    return $visitor->visitBitwiseAndExpression($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class MemberExpressionContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function expression() : ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    public function DOT() : ?TerminalNode
	    {
	        return $this->getToken(Recipe::DOT, 0);
	    }

	    public function identifier() : ?IdentifierContext
	    {
	    	return $this->getTypedRuleContext(IdentifierContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->enterMemberExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->exitMemberExpression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof RecipeVisitor) {
			    return $visitor->visitMemberExpression($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class AddExpressionContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

	    public function OP_ADD() : ?TerminalNode
	    {
	        return $this->getToken(Recipe::OP_ADD, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->enterAddExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->exitAddExpression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof RecipeVisitor) {
			    return $visitor->visitAddExpression($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class MultExpressionContext extends ExpressionContext
	{
		public function __construct(ExpressionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

	    public function OP_MULT() : ?TerminalNode
	    {
	        return $this->getToken(Recipe::OP_MULT, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->enterMultExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->exitMultExpression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof RecipeVisitor) {
			    return $visitor->visitMultExpression($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class AnonymousFunctionContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return Recipe::RULE_anonymousFunction;
	    }

	    public function arrowExpressionHead() : ?ArrowExpressionHeadContext
	    {
	    	return $this->getTypedRuleContext(ArrowExpressionHeadContext::class, 0);
	    }

	    public function ARROW() : ?TerminalNode
	    {
	        return $this->getToken(Recipe::ARROW, 0);
	    }

	    public function expression() : ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->enterAnonymousFunction($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->exitAnonymousFunction($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof RecipeVisitor) {
			    return $visitor->visitAnonymousFunction($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ArrowExpressionHeadContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return Recipe::RULE_arrowExpressionHead;
	    }

	    public function RND_BRACKET_OPEN() : ?TerminalNode
	    {
	        return $this->getToken(Recipe::RND_BRACKET_OPEN, 0);
	    }

	    public function parameterListOpt() : ?ParameterListOptContext
	    {
	    	return $this->getTypedRuleContext(ParameterListOptContext::class, 0);
	    }

	    public function RND_BRACKET_CLOSE() : ?TerminalNode
	    {
	        return $this->getToken(Recipe::RND_BRACKET_CLOSE, 0);
	    }

	    public function identifier() : ?IdentifierContext
	    {
	    	return $this->getTypedRuleContext(IdentifierContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->enterArrowExpressionHead($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->exitArrowExpressionHead($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof RecipeVisitor) {
			    return $visitor->visitArrowExpressionHead($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ParameterListOptContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return Recipe::RULE_parameterListOpt;
	    }

	    public function parameterList() : ?ParameterListContext
	    {
	    	return $this->getTypedRuleContext(ParameterListContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->enterParameterListOpt($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->exitParameterListOpt($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof RecipeVisitor) {
			    return $visitor->visitParameterListOpt($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ParameterListContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return Recipe::RULE_parameterList;
	    }

	    /**
	     * @return array<IdentifierContext>|IdentifierContext|null
	     */
	    public function identifier(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(IdentifierContext::class);
	    	}

	        return $this->getTypedRuleContext(IdentifierContext::class, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function COMMA(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(Recipe::COMMA);
	    	}

	        return $this->getToken(Recipe::COMMA, $index);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->enterParameterList($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->exitParameterList($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof RecipeVisitor) {
			    return $visitor->visitParameterList($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class MatchExpressionHeadContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return Recipe::RULE_matchExpressionHead;
	    }

	    public function RND_BRACKET_OPEN() : ?TerminalNode
	    {
	        return $this->getToken(Recipe::RND_BRACKET_OPEN, 0);
	    }

	    public function expression() : ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    public function RND_BRACKET_CLOSE() : ?TerminalNode
	    {
	        return $this->getToken(Recipe::RND_BRACKET_CLOSE, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->enterMatchExpressionHead($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->exitMatchExpressionHead($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof RecipeVisitor) {
			    return $visitor->visitMatchExpressionHead($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class MatchExpressionBodyContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return Recipe::RULE_matchExpressionBody;
	    }

	    public function CURLY_BRACKET_OPEN() : ?TerminalNode
	    {
	        return $this->getToken(Recipe::CURLY_BRACKET_OPEN, 0);
	    }

	    /**
	     * @return array<MatchEntryContext>|MatchEntryContext|null
	     */
	    public function matchEntry(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(MatchEntryContext::class);
	    	}

	        return $this->getTypedRuleContext(MatchEntryContext::class, $index);
	    }

	    public function CURLY_BRACKET_CLOSE() : ?TerminalNode
	    {
	        return $this->getToken(Recipe::CURLY_BRACKET_CLOSE, 0);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function COMMA(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(Recipe::COMMA);
	    	}

	        return $this->getToken(Recipe::COMMA, $index);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->enterMatchExpressionBody($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->exitMatchExpressionBody($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof RecipeVisitor) {
			    return $visitor->visitMatchExpressionBody($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class MatchEntryContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return Recipe::RULE_matchEntry;
	    }

	    public function expressionEnumeration() : ?ExpressionEnumerationContext
	    {
	    	return $this->getTypedRuleContext(ExpressionEnumerationContext::class, 0);
	    }

	    public function COLON() : ?TerminalNode
	    {
	        return $this->getToken(Recipe::COLON, 0);
	    }

	    public function expression() : ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    public function DEFAULT() : ?TerminalNode
	    {
	        return $this->getToken(Recipe::DEFAULT, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->enterMatchEntry($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->exitMatchEntry($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof RecipeVisitor) {
			    return $visitor->visitMatchEntry($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ExpressionEnumerationContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return Recipe::RULE_expressionEnumeration;
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function COMMA(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(Recipe::COMMA);
	    	}

	        return $this->getToken(Recipe::COMMA, $index);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->enterExpressionEnumeration($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->exitExpressionEnumeration($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof RecipeVisitor) {
			    return $visitor->visitExpressionEnumeration($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ParenthesesContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return Recipe::RULE_parentheses;
	    }

	    public function RND_BRACKET_OPEN() : ?TerminalNode
	    {
	        return $this->getToken(Recipe::RND_BRACKET_OPEN, 0);
	    }

	    public function expression() : ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    public function RND_BRACKET_CLOSE() : ?TerminalNode
	    {
	        return $this->getToken(Recipe::RND_BRACKET_CLOSE, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->enterParentheses($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->exitParentheses($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof RecipeVisitor) {
			    return $visitor->visitParentheses($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ListLiteralContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return Recipe::RULE_listLiteral;
	    }

	    public function SQR_BRACKET_OPEN() : ?TerminalNode
	    {
	        return $this->getToken(Recipe::SQR_BRACKET_OPEN, 0);
	    }

	    public function enumerationOpt() : ?EnumerationOptContext
	    {
	    	return $this->getTypedRuleContext(EnumerationOptContext::class, 0);
	    }

	    public function SQR_BRACKET_CLOSE() : ?TerminalNode
	    {
	        return $this->getToken(Recipe::SQR_BRACKET_CLOSE, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->enterListLiteral($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->exitListLiteral($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof RecipeVisitor) {
			    return $visitor->visitListLiteral($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class DictLiteralContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return Recipe::RULE_dictLiteral;
	    }

	    public function CURLY_BRACKET_OPEN() : ?TerminalNode
	    {
	        return $this->getToken(Recipe::CURLY_BRACKET_OPEN, 0);
	    }

	    public function CURLY_BRACKET_CLOSE() : ?TerminalNode
	    {
	        return $this->getToken(Recipe::CURLY_BRACKET_CLOSE, 0);
	    }

	    public function keyValues() : ?KeyValuesContext
	    {
	    	return $this->getTypedRuleContext(KeyValuesContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->enterDictLiteral($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->exitDictLiteral($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof RecipeVisitor) {
			    return $visitor->visitDictLiteral($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class KeyValuesContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return Recipe::RULE_keyValues;
	    }

	    /**
	     * @return array<KeyValueContext>|KeyValueContext|null
	     */
	    public function keyValue(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(KeyValueContext::class);
	    	}

	        return $this->getTypedRuleContext(KeyValueContext::class, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function COMMA(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(Recipe::COMMA);
	    	}

	        return $this->getToken(Recipe::COMMA, $index);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->enterKeyValues($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->exitKeyValues($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof RecipeVisitor) {
			    return $visitor->visitKeyValues($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class SpreadExpressionContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return Recipe::RULE_spreadExpression;
	    }

	    public function OP_SPREAD() : ?TerminalNode
	    {
	        return $this->getToken(Recipe::OP_SPREAD, 0);
	    }

	    public function expression() : ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->enterSpreadExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->exitSpreadExpression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof RecipeVisitor) {
			    return $visitor->visitSpreadExpression($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class KeyValueContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return Recipe::RULE_keyValue;
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

	    public function COLON() : ?TerminalNode
	    {
	        return $this->getToken(Recipe::COLON, 0);
	    }

	    public function spreadExpression() : ?SpreadExpressionContext
	    {
	    	return $this->getTypedRuleContext(SpreadExpressionContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->enterKeyValue($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->exitKeyValue($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof RecipeVisitor) {
			    return $visitor->visitKeyValue($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class EnumerationContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return Recipe::RULE_enumeration;
	    }

	    /**
	     * @return array<SpreadExpressionContext>|SpreadExpressionContext|null
	     */
	    public function spreadExpression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(SpreadExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(SpreadExpressionContext::class, $index);
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function COMMA(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(Recipe::COMMA);
	    	}

	        return $this->getToken(Recipe::COMMA, $index);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->enterEnumeration($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->exitEnumeration($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof RecipeVisitor) {
			    return $visitor->visitEnumeration($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class EnumerationOptContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return Recipe::RULE_enumerationOpt;
	    }

	    public function enumeration() : ?EnumerationContext
	    {
	    	return $this->getTypedRuleContext(EnumerationContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->enterEnumerationOpt($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->exitEnumerationOpt($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof RecipeVisitor) {
			    return $visitor->visitEnumerationOpt($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class VariableContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return Recipe::RULE_variable;
	    }

	    public function identifier() : ?IdentifierContext
	    {
	    	return $this->getTypedRuleContext(IdentifierContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->enterVariable($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->exitVariable($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof RecipeVisitor) {
			    return $visitor->visitVariable($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class IdentifierContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return Recipe::RULE_identifier;
	    }

	    public function ID() : ?TerminalNode
	    {
	        return $this->getToken(Recipe::ID, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->enterIdentifier($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->exitIdentifier($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof RecipeVisitor) {
			    return $visitor->visitIdentifier($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class LiteralContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return Recipe::RULE_literal;
	    }

	    public function listLiteral() : ?ListLiteralContext
	    {
	    	return $this->getTypedRuleContext(ListLiteralContext::class, 0);
	    }

	    public function dictLiteral() : ?DictLiteralContext
	    {
	    	return $this->getTypedRuleContext(DictLiteralContext::class, 0);
	    }

	    public function STRING() : ?TerminalNode
	    {
	        return $this->getToken(Recipe::STRING, 0);
	    }

	    public function INT() : ?TerminalNode
	    {
	        return $this->getToken(Recipe::INT, 0);
	    }

	    public function FLOAT() : ?TerminalNode
	    {
	        return $this->getToken(Recipe::FLOAT, 0);
	    }

	    public function NULL() : ?TerminalNode
	    {
	        return $this->getToken(Recipe::NULL, 0);
	    }

	    public function BOOL() : ?TerminalNode
	    {
	        return $this->getToken(Recipe::BOOL, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->enterLiteral($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->exitLiteral($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof RecipeVisitor) {
			    return $visitor->visitLiteral($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class TemplateStringContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return Recipe::RULE_templateString;
	    }

	    public function TemplateStringOpen() : ?TerminalNode
	    {
	        return $this->getToken(Recipe::TemplateStringOpen, 0);
	    }

	    public function TemplateStringClose() : ?TerminalNode
	    {
	        return $this->getToken(Recipe::TemplateStringClose, 0);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function TemplateStringLiteral(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(Recipe::TemplateStringLiteral);
	    	}

	        return $this->getToken(Recipe::TemplateStringLiteral, $index);
	    }

	    /**
	     * @return array<TemplateContext>|TemplateContext|null
	     */
	    public function template(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(TemplateContext::class);
	    	}

	        return $this->getTypedRuleContext(TemplateContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->enterTemplateString($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->exitTemplateString($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof RecipeVisitor) {
			    return $visitor->visitTemplateString($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class TemplateContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex() : int
		{
		    return Recipe::RULE_template;
	    }

	    public function TemplateStart() : ?TerminalNode
	    {
	        return $this->getToken(Recipe::TemplateStart, 0);
	    }

	    public function expression() : ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    public function TemplateEnd() : ?TerminalNode
	    {
	        return $this->getToken(Recipe::TemplateEnd, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->enterTemplate($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof RecipeListener) {
			    $listener->exitTemplate($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof RecipeVisitor) {
			    return $visitor->visitTemplate($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 
}
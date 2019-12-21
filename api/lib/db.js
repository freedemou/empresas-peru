'use strict'

const { MongoClient } = require('mongodb')

let DB_USER = '$pyroho$t'
let DB_PASSWD = 'spyrohost'
let DB_HOST = 'goliat.spyrohost.com'
let DB_PORT = '27017'
let DB_NAME = 'branif_crm'

const mongoUrl = `mongodb://${DB_USER}:${DB_PASSWD}@${DB_HOST}:${DB_PORT}/${DB_NAME}`
let connection

async function connectDB () {
  if (connection) return connection

  let client
  try {
    client = await MongoClient.connect(mongoUrl, {
      useNewUrlParser: true,
      useUnifiedTopology: true
    })
    connection = client.db(DB_NAME)
  } catch (error) {
    console.error('Could not connect to db', mongoUrl, error)
  }

  return connection
}

module.exports = connectDB
